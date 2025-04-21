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
        $products = Product::with(['product_images', 'certificates'])
                ->latest()
                ->when($request->has('group') && $request->group !== 'all', function($query) use ($request) {
                    $query->whereHas('product_group', function($q) use ($request) {
                        $q->where('name', $request->group);
                    });
                })
                ->get();

        // Search products
        if ($request->q) {
            $products = Product::query()
                ->with(['product_images', 'certificates'])
                ->where('type', 'LIKE', '%'.request('q').'%')
                ->orWhere('cable_type', 'LIKE', '%'.request('q').'%')
                ->get();
        }

        if ($request->is('admin/*')) {
            return view('admin.products.index', compact('products'));
        } else {
            return view('users.products.index', compact('products'));
        }
    }

    public function show(Request $request, Product $product)
    {
        $product->load(['product_images', 'certificates']);
        if ($request->is('admin/*')) {
            return view('admin.products.show', compact('product'));
        } else {
            return view('users.products.show', compact('product'));
        }
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
            'cable_type' => ['required'],
            'size' => ['required'],
            'rated_voltage' => ['required'],
            'rating_voltage' => ['nullable', 'string'],
            'colour' => ['required'],
            'application' => ['required'],
            'product_standard' => ['required'],
            'heat_resistance' => ['required'],
            'test' => ['required', 'string', 'max: 100'],
            'description' => ['nullable', 'string'],
            'images.*' => ['required', File::types(['png', 'jpg', 'jpeg']), 'max:2048'],
            'data_sheet' => ['required', File::types(['pdf']), 'max: 2048']
        ]);

        $productAttrs['slug'] = Str::slug($request->type . '-' . $request->cable_type);
        $productAttrs['rohs'] = $request->has('rohs');

        // handle document upload
        if ($request->hasFile('data_sheet')) {
            $path = $productAttrs['data_sheet']->store('data_sheet', 'public');
        }

        $productAttrs['data_sheet'] = $path;

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
