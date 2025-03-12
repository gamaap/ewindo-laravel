<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        return view('users.careers.index');
    }

    public function create()
    {
        return view('users.careers.create');
    }
}
