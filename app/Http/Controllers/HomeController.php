<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');

        $content = view('admin.pages.content');
        $header = view('admin.pages.header');
        $left = view('admin.pages.left-side');
        $footer = view('admin.pages.footer');
        $right = view('admin.pages.right-side');
        
        return view('admin.pages.dash', compact('content','header','left','footer','right'));
    }
}
