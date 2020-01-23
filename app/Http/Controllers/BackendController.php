<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index()
    {
        $content = view('admin.pages.content');
        $header = view('admin.pages.header');
        $left = view('admin.pages.left-side');
        $footer = view('admin.pages.footer');
        $right = view('admin.pages.right-side');
        return view('admin.pages.dash', compact('content','header','left','footer','right'));
    }
}
