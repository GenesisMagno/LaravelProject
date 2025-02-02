<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $user = Auth::user();
        
        return view('homepage.products',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.adminCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'big' => ['nullable', 'numeric', 'max:999999'], 
            'medium' => ['nullable', 'numeric', 'max:999999'],
            'platter' => ['nullable', 'numeric', 'max:999999'],
            'tub' => ['nullable', 'numeric', 'max:999999']
        ]);
  
        $validated['image']= $request->file('image')->store('images' , 'public');

        Product::create($validated);

        return to_route('admin');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product= Product::findOrFail($product->id);

        return view('homepage.productsView',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.adminUpdate',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'big' => ['nullable', 'numeric', 'max:999999'], 
            'medium' => ['nullable', 'numeric', 'max:999999'],
            'platter' => ['nullable', 'numeric', 'max:999999'],
            'tub' => ['nullable', 'numeric', 'max:999999']
        ]);
        if($request->hasFile('image')){
            Product::destroyImage($product->image);
            $validated['image']= $request->file('image')->store('images' , 'public');
        }else{
            $validated['image']= $product->image;
        }
        $product->update($validated);
        return to_route('admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::destroyImage($product->image);
        $product->delete();
        return to_route('admin');

    }
    public function search(Request $request)
    {
        $query = $request->input('search');  // Get search query from request

        if ($query) {
            // Use Laravel's query builder to filter products based on the query
            $products = Product::where('name', 'like', '%' . $query . '%')
                                ->orWhere('big','like','%' . $query . '%')
                                ->orWhere('medium','like','%' . $query . '%')
                                ->orWhere('platter','like','%' . $query . '%')
                                ->orWhere('tub','like','%' . $query . '%')
                               ->get();
        } else {
            // If no query is provided, return all products
            $products = Product::all();
        }

        return to_route('admin');
    }
}
