<?php

namespace App\Http\Controllers;

use App\General;
use Auth;
use Redirect;
use Carbon\Carbon;
use App\Http\Requests\GeneralForm;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generals = General::first();
        return view('admin.setting.general.create', compact('generals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneralForm $request)
    {
        General::insert([
            'com_name' => $request->com_name,
            'header_title' => $request->header_title,
            'com_addres' => $request->com_addres,
            'com_phone' => $request->com_phone,
            'copyright' => $request->copyright,
            'com_logo' => $request->com_logo,
            'com_details' => $request->com_details,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instragram' => $request->instragram,
            'youtube' => $request->youtube,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now(),
        ]);

        return Redirect::to('general')->with('success', 'General Setting Add Successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\General  $general
     * @return \Illuminate\Http\Response
     */
    public function show(General $general)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\General  $general
     * @return \Illuminate\Http\Response
     */
    public function edit(General $general)
    {
        $generals = General::first();
        return view('admin.setting.general.edit', compact('generals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\General  $general
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, General $general)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\General  $general
     * @return \Illuminate\Http\Response
     */
    public function destroy(General $general)
    {
        //
    }
}
