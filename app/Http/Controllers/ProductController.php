<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SubCategory;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $sl = 1;
        return view('admin.product.index', compact('products','sl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sub_cats = SubCategory::all();
        $cates = Category::all();
        return view('admin.product.create', compact('cates','sub_cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // print_r($request->all());

        Product::insert([
            'category'=> $request->category,
            'sub_cate'=> $request->sub_cate,
            'product_name'=> $request->product_name,
            'slug'=> $request->slug,
            'regular_price'=> $request->regular_price,
            'old_price'=> $request->old_price,
            'discount_percent'=> $request->discount_percent,
            'product_quantity'=> $request->product_quantity,
            'pro_detail'=> $request->pro_detail,
            'pro_image'=> $request->pro_image,
            'color'=> $request->color,
            'size'=> $request->size,
            'created_by'=> Auth::id(),
            'created_at'=> Carbon::now(),
        ]);

        return Redirect::to('product')->with('succes', 'Your Product Add Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::all()->first();
        return view('admin.product.detail', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
