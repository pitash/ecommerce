<?php

namespace App\Http\Controllers;

use App\NewArrival;
use App\SubCategory;
use App\Category;
use App\Header;
use Auth;
use Redirect;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewArrivalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nws = NewArrival::all();
        return view('admin.short_list.new.index', compact('nws'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent = Header::all();
        $sub_cats = SubCategory::all();
        $cates = Category::all();
        return view('admin.short_list.new.create', compact('parent','sub_cats','cates'));
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

        NewArrival::insert([
            'parent'=> $request->parent,
            'category'=> $request->category,
            'sub_cate'=> $request->sub_cate,
            'att_title'=> $request->att_title,
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

        return Redirect::to('new')->with('succes', 'New Arrivals Product Add Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewArrival  $newArrival
     * @return \Illuminate\Http\Response
     */
    public function show(NewArrival $newArrival)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewArrival  $newArrival
     * @return \Illuminate\Http\Response
     */
    public function edit(NewArrival $newArrival)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewArrival  $newArrival
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewArrival $newArrival)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewArrival  $newArrival
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewArrival $newArrival)
    {
        //
    }
}
