<?php

namespace App\Http\Controllers;

use App\SubCategory;
use App\Category;
use App\Header;
use Auth;
use Redirect;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcats = SubCategory::all();
        $sl = 1;
        return view('admin.sub_cate.index', compact('sl','subcats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $headers = Header::all();
        $category = Category::all();
        return view('admin.sub_cate.create', compact('headers','category'));
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
        
        $request->validate([
            'parent' => 'required',
            'category' => 'required',
            'sub_category' => 'required'
        ]);

        SubCategory::insert([
            'parent' => $request->parent,
            'category' => $request->category,
            'sub_category' => $request->sub_category,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now(),
        ]);

        return Redirect::to('sub_category')->with('success', 'Sub Category Add Successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        //
    }
}
