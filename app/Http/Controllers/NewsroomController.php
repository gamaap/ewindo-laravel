<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Newsroom;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;



class NewsroomController extends Controller
{

    
    public function index()
    {
        return view('users.newsroom.index',['news' => Newsroom::all(), 'categories' => Category::all()

        ]);
    }
    public function filter(Category $category)
    {
        return view('users.newsroom.index',['news' => Newsroom::all(), 'categories' => Category::all(),
        'news' => $category->newsrooms
        ]);
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
}
