<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Certificate;
use Illuminate\Support\Str;
use App\Models\ProductGroup;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->is('admin/*')) {
            // logic admin
            return view('admin.products.index');
        } else {
            // logic user
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

            $parentGroups = ProductGroup::whereNull('parent_id')->get();
            $childGroups = ProductGroup::whereNotNull('parent_id')->get();

            $certificates = Certificate::all();

            return view('admin.products.create', compact('parentGroups', 'childGroups', 'certificates'));
        } else {
            return view('users.products.create');
        }
    }

    public function store(Request $request)
    {
        $productAttrs = $request->validate([
            'product_group_id' => ['required'],
            'type' => ['required'],
            'plug_type' => ['required'],
            'connector_type' => ['required'],
            'cable_type' => ['required'],
            'plug_type' => ['required'],
            'size' => ['required'],
            'rated_voltage' => ['required'],
            'colour' => ['required'],
            'application' => ['required'],
            'product_standard' => ['required'],
            'heat_resistance' => ['required'],
            'test' => ['required'],
            'description' => ['nullable', 'string'],
            'images.*' => ['required', File::types(['png', 'jpg', 'jpeg']), 'max:2048']
        ]);

        $productAttrs['slug'] = Str::slug($request->type . '-' . $request->cable_type);
        $productAttrs['rohs'] = $request->has('rohs');

        $product = Product::create($productAttrs);

        // Handle multiple image upload
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public'); // storage/app/public/products

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path
                ]);
            }
        }

        if ($request->has('certificates')) {
            $product->certificates()->attach($request->certificates);
        }

        return redirect('/admin/products');
    }
}
