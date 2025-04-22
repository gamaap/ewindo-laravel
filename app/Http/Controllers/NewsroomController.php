<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Newsroom;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\NewsroomCategory;
use App\Models\NewsroomImage;
use Illuminate\Support\Facades\Auth;

class NewsroomController extends Controller
{
    public function index(Request $request)
    {
        if ($request->is('admin/*')) {
            return view('admin.newsroom.index');
        } else {
            return view('users.newsroom.index',
                ['news' => Newsroom::all(),  'categories' => Category::all()
            ]);
        }
    }

    public function filter(Category $category)
    {
        return view('users.newsroom.index',['news' => Newsroom::all(), 'categories' => Category::all(),
        'news' => $category->newsrooms
        ]);
    }

    public function create()
    {
        $categories = NewsroomCategory::all();
        return view('admin.newsroom.create', compact('categories'));
    }

    public function show(Newsroom $newroom)
    {
        // Cari berita berdasarkan ID
        // $newroom = Newsroom::find($id);

        // Jika tidak ditemukan, redirect atau tampilkan halaman 404
        if (!$newroom) {
            abort(404, 'Newsroom not found');
        }

        // Kirim data ke view
        return view('users.newsroom.show', compact('newroom'));
    }

    public function store(Request $request)
    {
        $attrs = $request->validate([
            'newsroom_category_id' => ['required'],
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string']
        ]);

        $attrs['user_id'] = Auth::user()->id;
        $attrs['slug'] = Str::slug($request->title);

        $newsroom = Newsroom::create($attrs);

        // Handle multiple image upload
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('newsroom', 'public'); // storage/app/public/products

                NewsroomImage::create([
                    'newsroom_id' => $newsroom->id,
                    'image_path' => $path
                ]);
            }
        }

        return redirect('/admin/newsroom');
    }
}
