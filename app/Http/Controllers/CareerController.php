<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Departement;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        return view('users.careers.index', [
            'jobs' => Job::latest()->get(),
            'departement' => Departement::latest()->get()
        ]);
    }

    public function create(Job $job)
    {
        return view('users.careers.apply', [
            'job' => $job
        ]);
    }
}
