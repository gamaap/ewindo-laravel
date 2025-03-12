<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsroomController extends Controller
{
    public function index()
    {
        return view('users.newsroom.index');
    }

    public function show()
    {
        return view('users.newsroom.show');
    }
}
