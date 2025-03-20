<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Newsroom;
use Illuminate\Http\Request;
use App\Models\NewsroomCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class NewsroomController extends Controller
{
    public function index(Request $request)
    {

        if ($request->is('admin/*')) {

            // Melakukakn inisialisasi
        $query = Newsroom::query();

        // Membuat sebuah validasi dari sebuah request dari search
        if ($request->search) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ;
        }
    
        // Melakukan request jika ada request sort
        if ($request->sort == 'oldest') {
            $query->orderBy('created_at', 'asc');
        } else {
            $query->orderBy('created_at', 'desc');
        }

            return view('admin.newsroom.index',[
             'articles' => $query->paginate(9)->withQueryString(),
             'categories' => NewsroomCategory::all()
            ]);
            
        } else {
        return view('users.newsroom.index',[
            'articles' => Newsroom::latest()->get(), 
            'categories' => NewsroomCategory::latest()->get()
        ]);
    }
}
    public function filter(NewsroomCategory $category)
    {
        return view('users.newsroom.index',[
        'articles' => Newsroom::latest()->get(), 
        'categories' => NewsroomCategory::all(),
        'articles' => $category->newsrooms
        ]);
    }

    public function show(Request $request, Newsroom $newroom)
    {
        if (!$newroom) {
            abort(404, 'Newsroom not found');
        }
        if ($request->is('admin/*')) 
        {
            return view('admin.newsroom.show', compact('newroom'));
        } else {
            return view('users.newsroom.show', compact('newroom'));
        }
    }

    public function create(Request $request)
    {
        if ($request->is('admin/*')) {
            return view('admin.newsroom.create', [
                'categories' => Newsroomcategory::all()]);
        } else {
            return view('users.newsroom.create');
        }
    }
    public function store(Request $request)
    {
        // dd($request);
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:newsrooms',
            'category_id' => 'required',
            // 'image' => 'image|file|max:1024',
            'files' => 'required|array|max:20',
            'files.*' => 'image|mimes:jpg,jpeg,png,gif|max:20048',
            'body' => 'required'
        ]);


        $uploadedFiles = [];
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $path = $file->store('image-newsroom', 'public');
                $uploadedFiles[] = $path;
            }
        }

        // if($request->file('image'))
        // {
        //     $validateData['image'] = $request->file('image')->
        //     store('image-post');
        // }

        $validateData['user_id'] = Auth::user()->id;
        $validateData['image'] = json_encode($uploadedFiles);

        // dd($validateData);

        Newsroom::create($validateData);

        return redirect('/admin/newsroom')->with('success', 'New Post Has Been added!');
    }
    
    public function destroy(Newsroom $newsroom)
    {

       if ($newsroom->image) {
        $files = json_decode($newsroom->image, true);
        foreach ($files as $file) {
            Storage::disk('public')->delete($file);
        }
    }

        // dd($request);
        Newsroom::destroy($newsroom->id); 
        return redirect('/admin/newsroom')->with('success', 'Post Has Been Deleted!');
        
    }

    public function checkSlug (Request $request)
    {
        $slug = SlugService::createSlug(Newsroom::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function edit (Newsroom $newsroom)
    {
        return view('admin.newsroom.edit', [
            'newsroom' => $newsroom,
            'categories' => Newsroomcategory::all()]);
    }

    // public function update (Request $request, Newsroom $newsroom)
    // {
    //     $rules = [
    //         'title' => 'required|max:255',
    //         'category_id' => 'required',
    //         // 'image' => 'image|file|max:1024',
    //         'image' => 'sometimes|array|max:20',
    //         'image.*' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
    //         'body' => 'required'

    //     ];

    //     foreach ($request->file('image') as $file) {
    //         $path = $file->store('image-postt2', 'public');
    //         $uploadedFiles[] = $path;
    //     }
    //     dd($uploadedFiles); // Cek apakah path terisi?

    //     if ($request->slug != $newsroom->slug) {
    //         $rules['slug'] = 'required|unique:newsrooms';
    //     }
    
    //     $validateData = $request->validate($rules);
    
    //     $validateData['user_id'] = Auth::user()->id;


        // Upload file baru

        
        
        // if ($request->hasFile('image')) {
        //     // Optional: Delete old images if needed
        //     if ($request->oldImage) {
        //         $oldImages = json_decode($request->oldImage, true) ?? [];
        //         foreach ($oldImages as $old) {
        //             Storage::delete($old);
        //         }
        //     }
        
        //     // Multiple upload
        //     $uploadedFiles = [];
        //     foreach ($request->file('image') as $file) {
        //         $path = $file->store('image-postt2', 'public');
        //         $uploadedFiles[] = $path;
        //     }
        
        //     // Save as JSON
        //     $validateData['image'] = json_encode($uploadedFiles);
        // }
    
        // // Update data newsroom
        // Newsroom::where('id', $newsroom->id)->update($validateData);
    
        // return redirect('/admin/newsroom')->with('success', 'Post Has Been Updated!');
        

        // validate image
        // if($request->file('image'))
        // {
        //     if($request->oldImage){
        //         Storage::delete($request->oldImage); 
        //     }
        //     $validateData['image'] = $request->file('image')->
        //     store('image-post');
        // }

//     }
public function update(Request $request, Newsroom $newsroom)
{
    $rules = [
        'title' => 'required|max:255',
        'category_id' => 'required',
        'image' => 'sometimes|array|max:20',
        'image.*' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
        'body' => 'required'
    ];

    if ($request->slug != $newsroom->slug) {
        $rules['slug'] = 'required|unique:newsrooms';
    }

    $validateData = $request->validate($rules);
    $validateData['user_id'] = Auth::user()->id;

    // Logic untuk upload image baru
    if ($request->hasFile('image')) {
        // 1. Hapus gambar lama jika ada
        if ($newsroom->image) {
            $oldImages = json_decode($newsroom->image, true) ?? [];
            foreach ($oldImages as $old) {
                if (Storage::disk('public')->exists($old)) {
                    Storage::disk('public')->delete($old);
                }
            }
        }

        // 2. Upload gambar baru
        $uploadedFiles = [];
        foreach ($request->file('image') as $file) {
            $path = $file->store('image-newsroom', 'public');
            $uploadedFiles[] = $path;
        }

        // 3. Simpan JSON array ke DB
        $validateData['image'] = json_encode($uploadedFiles);
    }

    // 4. Update data ke database
    $newsroom->update($validateData);

    return redirect('/admin/newsroom')->with('success', 'Post Has Been Updated!');
}

}
