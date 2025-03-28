<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use App\Models\Departement;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->is('admin/*')) {
            return view('admin.job.index', [
                'jobs' => Job::with('tags')->latest()->get(),
                'departements' => Departement::latest()->get(),
                'tags' => Tag::all()
            ]);
               
                
        } else {
            return view('users.careers.index', [
                'jobs' => Job::with('tags')->where('job_status', 1)->latest()->get()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if($request->is('admin/*')){
            return view('admin.job.create',[
                'jobs' => Job::all(),
                'departements' => Departement::all()
            ]);
        }
        else{
            return view('users.job.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        $attrs = $request->validate([
            'job_name' => 'required|max:255',
            'slug' => 'required|unique:jobs',
            'departement_id' => 'required',
            'job_type' => ['required',Rule::in(['FullTime', 'Shift', 'Internship'])],
            'quota' => 'required',
            'job_location' => ['required',Rule::in(['Plant 1', 'Plant 2'])],
            'job_deskripsi' => 'required|max:255',
            'job_status' => 'required',
            'tags' => 'nullable'
        ]);

        $job = Job::create(Arr::except($attrs, 'tags'));

        if($attrs['tags'] ?? false) {
            foreach (explode(',', $attrs['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/admin/job')->with('success', 'New Lowongan Has Been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('admin.job.edit', [
            'job' => $job,
            'departements' => Departement::all(),
            'tags' => $job->tags, // Mengambil hanya tag yang terkait dengan job ini
            'allTags' => Tag::all(), // Jika butuh semua tag untuk dropdown atau input
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        $rules = [
            'job_name' => 'required|max:255',
            'departement_id' => 'required',
            'job_type' => ['required',Rule::in(['FullTime', 'Shift', 'Internship'])],
            'quota' => 'required',
            'job_location' => ['required',Rule::in(['Plant 1', 'Plant 2'])],
            'job_deskripsi' => 'required|max:255',
            'job_status' => 'required',
            'tags' => 'nullable'
        ];
    
        if ($request->slug != $job->slug) {
            $rules['slug'] = 'required|unique:jobs';
        }
    
        $validatedData = $request->validate($rules);

        $job->update(Arr::except($validatedData, ['tags']));

        if($rules['tags'] ?? false) {
            foreach (explode(',', $rules['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/admin/job')->with('success', 'Lowongan Has Been Updated!');
    }

    public function filter(Request $request)
{
    // Ambil nilai job_status dari request (default null)
    $status = $request->query('job_status');

    // Query berdasarkan status jika tidak null
    $jobs = Job::when(isset($status), function ($query) use ($status) {
        return $query->where('job_status', $status);
    })->get();

    return view('admin.job.index', compact('jobs'));
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        Job::destroy($job->id); 
        return redirect('/admin/job')->with('success', 'Lowongan Has Been Deleted!');
    }

    public function checkSlug (Request $request)
    {
        $slug = SlugService::createSlug(Job::class, 'slug', $request->job_name);
        return response()->json(['slug' => $slug]);
    }
}
