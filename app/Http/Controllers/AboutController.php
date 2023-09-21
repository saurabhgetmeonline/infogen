<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $abouts = About::all();
        return view("admins.abouts.index")->with('abouts',$abouts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admins.abouts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $input = $request->all();
        if ($header_image = $request->file('header_image')) {
            # code...
            $path = "admins/assets/img/aboutus/header_image/";
            $file = date("YmdHis").".". $header_image->getClientOriginalExtension();
            $header_image->move($path,$file);
            $input['header_image'] = $file;
        }
    // Create the About model instance
    About::create($input);

    return redirect("about")->with("flash_message", "Data Created Successfully");
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $abouts = About::find($id);
        return view("admins.abouts.show")->with('abouts',$abouts);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $abouts = About::find($id);
        return view("admins.abouts.edit")->with('abouts',$abouts);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
         $abouts = About::find($id);
        $input = $request->all();
       if ($header_image = $request->file('header_image')) {
            # code...
            $path = "admins/assets/img/aboutus/header_image/";
            $file = date("YmdHis").".". $header_image->getClientOriginalExtension();
            $header_image->move($path,$file);
            $input['header_image'] = $file;
        }else{
            unset($input['header_image']);
        }
        $abouts->update($input);
        return redirect("about")->with("flash_message","Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $abouts = About::destroy($id);
        return redirect("about")->with("flash_message","Data Deleted Successfully");
    }
}