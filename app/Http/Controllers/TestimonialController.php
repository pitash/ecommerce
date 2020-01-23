<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Auth;
use Redirect;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Testimonial::all();
        $sl = 1;
        return view('admin.testimonial.index', compact('tests','sl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
            'person_name' => 'required',
            'pro_detail' => 'required',
            'image' => 'required'
        ]);

        $imgid = Testimonial::insertGetId([
            'person_name' => $request->person_name,
            'pro_detail' => $request->pro_detail,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now(),
        ]);

        if ($request->hasFile('image'))
          {
            $path = $request->file('image')->store('testimonial');
            Testimonial:: find($imgid)->update([
               "img" => $path
             ]);
             // return back();
          }

        return Redirect::to('testimonial')->with('success', ' Testimonial Add Successfully !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
