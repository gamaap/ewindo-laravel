<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->is('admin/*')) {
            return view('admin.products.index');
        } else {
            return view('users.products.index');
        }
    }

    public function show()
    {
        return view('users.products.show');
    }

    public function create(Request $request)
    {
        if ($request->is('admin/*')) {
            return view('admin.products.create');
        } else {
            return view('users.products.create');
        }
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
