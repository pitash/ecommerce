<?php

namespace App\Http\Controllers;

use App\CenterCard;
use Auth;
use Redirect;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CenterCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $center = CenterCard::all();
        $sl = 1;
        return view('admin.card.center.index', compact('center','sl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.card.center.create');
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
            'name' => 'required',
            'image' => 'required',
        ]);

        $imgid = CenterCard::insertGetId([
            'name' => $request->name,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now(),
        ]);

        if ($request->hasFile('image'))
          {
            $path = $request->file('image')->store('card');
            CenterCard:: find($imgid)->update([
               "img" => $path
             ]);
             // return back();
          }

        return Redirect::to('center_card')->with('success', 'Center Card Add Successfully!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CenterCard  $centerCard
     * @return \Illuminate\Http\Response
     */
    public function show(CenterCard $centerCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CenterCard  $centerCard
     * @return \Illuminate\Http\Response
     */
    public function edit(CenterCard $centerCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CenterCard  $centerCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CenterCard $centerCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CenterCard  $centerCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(CenterCard $centerCard)
    {
        //
    }
}
