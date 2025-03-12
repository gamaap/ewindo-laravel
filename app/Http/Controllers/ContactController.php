<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('users.contact.index');
    }

    public function store(Request $request)
    {
        
    }
}
