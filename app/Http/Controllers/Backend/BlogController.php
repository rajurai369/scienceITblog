<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog=Blog::all();
        return view('backend.blogs.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog=new Blog();
        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->branch=$request->branch;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $blog->image="images/$newName";
        }
        $blog->save();
        return redirect('/blog');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog=Blog::find($id);
        return view('backend.blogs.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog= Blog::find($id);
        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->branch=$request->branch;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $blog->image="images/$newName";
        }
        $blog->update();
        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog=Blog::find($id);
        $blog->delete();
        return redirect('/blog');
    }
}
