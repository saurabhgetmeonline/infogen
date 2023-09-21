<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $banners = Banner::all();
        return view("admins.banners.index")->with('banners',$banners);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admins.banners.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        if ($banner_image = $request->file('banner_image')) {
            # code...
            $path ="admins/assets/img/homepage/banners/";
            $file = date("YmdHis").".".$banner_image->getClientOriginalExtension();
            $banner_image->move($path,$file);
            $input['banner_image'] = $file;
        }
        Banner::create($input);
        return redirect("banner")->with("flash_message","Data Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $banners = Banner::find($id);
        return view("admins.banners.show")->with('banners',$banners);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $banners = Banner::find($id);
        return view("admins.banners.edit")->with('banners',$banners);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $banners = Banner::find($id);
        if ($banner_image = $request->file('banner_image')) {
            # code...
            $path ="admins/assets/img/homepage/banners/";
            $file = date("YmdHis").".".$banner_image->getClientOriginalExtension();
            $banner_image->move($path,$file);
            $input['banner_image'] = $file;
        }else{
            unset($input['banner_image']);
        }
        $banners->update($input);
        return redirect("banner")->with("flash_message","Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $banners = Banner::destroy($id);
        return redirect("banner")->with("flash_message","Data Deleted Successfully");
    }
}
