<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $blogs=Blog::all();
        $settings=Setting::first();
        return view('frontend.index',compact('blogs','settings'));
    }

    public function physics(){
        $settings=Setting::first();
        return view('frontend.physics',compact('settings'));
    }

    public function technology(){
        $settings=Setting::first();
        return view('frontend.technology',compact('settings'));
    }

    public function blog_detail($id){
        $settings=Setting::first();

        $blog = Blog::findOrFail($id);
        return view('frontend.blog_details',compact('settings','blog'));
    }
}
