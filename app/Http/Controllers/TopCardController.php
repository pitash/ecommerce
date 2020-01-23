<?php

namespace App\Http\Controllers;

use App\TopCard;
use Auth;
use Redirect;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TopCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tops = TopCard::all();
        $sl = 1;
        return view('admin.card.top.index', compact('tops','sl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.card.top.create');
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
            'title' => 'required',
            'pro_name' => 'required',
            'hover_text' => 'required',
            'image' => 'required'
        ]);

        $imgid = TopCard::insertGetId([
            'title' => $request->title,
            'pro_name' => $request->pro_name,
            // 'img' => $request->img,
            'hover_text' => $request->hover_text,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now(),
        ]);

        if ($request->hasFile('image'))
          {
            $path = $request->file('image')->store('card');
            TopCard:: find($imgid)->update([
               "img" => $path
             ]);
             // return back();
          }

        return Redirect::to('top_card')->with('success', 'Top Card Add Successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TopCard  $topCard
     * @return \Illuminate\Http\Response
     */
    public function show(TopCard $topCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TopCard  $topCard
     * @return \Illuminate\Http\Response
     */
    public function edit(TopCard $topCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TopCard  $topCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopCard $topCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TopCard  $topCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(TopCard $topCard)
    {
        //
    }
}
