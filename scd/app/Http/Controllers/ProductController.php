<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // FRONTEND: show list of products to customers
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('products', compact('products')); // your frontend blade path
    }

    // FRONTEND: show single product detail
    public function show(Product $product)
    {
        return view('product-detail', compact('product'));
    }

    // ADMIN: list products in admin panel
    public function adminIndex()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(12);
        return view('admin.products.index', compact('products'));
    }

    
    // ADMIN: show create form
    public function create()
    {
        return view('admin.products.create');
    }

    // ADMIN: handle create
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'required|url',
        ]);

        Product::create($validated);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    // ADMIN: show edit form
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    // ADMIN: update product
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'required|url',
        ]);

        $product->update($validated);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    // ADMIN: delete product
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted.');
    }
}
