<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PressController extends Controller
{
    public function index(Request $request)
    {
        if ($request->is('admin/*')) {
            return view('admin.press.index');
        } else {
            return view('users.press.index');
        }
    }

    public function show()
    {
        return view('users.press.show');
    }

    public function create(Request $request)
    {
        if ($request->is('admin/*')) {
            return view('admin.press.create');
        } else {
            return view('users.press.create');
        }
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
