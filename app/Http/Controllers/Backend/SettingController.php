<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting=Setting::first();
        return view('backend.settings.index',compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('backend.settings.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $setting=new Setting();
        $setting->phone=$request->phone;
        $setting->email=$request->email;
        $setting->facebook=$request->facebook;
        $setting->instagram=$request->instagram;
        $setting->linkedin=$request->linkedin;
        $setting->twitter=$request->twitter;
        if ($request->hasFile('logo')) {
            $file = $request->logo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $setting->logo="images/$newName";
        }
        $setting->save();
        return redirect('/setting');

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
        $setting=Setting::find($id);
        return view('backend.settings.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $setting=Setting::find($id);
        $setting->phone=$request->phone;
        $setting->email=$request->email;
        $setting->facebook=$request->facebook;
        $setting->instagram=$request->instagram;
        $setting->linkedin=$request->linkedin;
        $setting->twitter=$request->twitter;
        if ($request->hasFile('logo')) {
            $file = $request->logo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $setting->logo="images/$newName";
        }
        $setting->update();
        return redirect('/setting');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $setting= Setting::find($id);
        $setting->delete();
        return redirect('/setting');
    }
}
