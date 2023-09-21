<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home_first_section;


class Home_first_sectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $home_first_section = Home_first_section::all();
        return view("admins.home_first_section.index")->with('home_first_section', $home_first_section);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admins.home_first_section.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        if ($image = $request->file('image')) {
            # code...
            $path = "admins/assets/img/homepage/home_first_section/";
            $file = date("YmdHis") . "." . $image->getClientOriginalExtension();
            $image->move($path, $file);
            $input['image'] = $file;
        }
        Home_first_section::create($input);
        return redirect("first-section")->with("flash_message", "Data Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $home_first_section = Home_first_section::find($id);
        return view("admins.home_first_section.show")->with('home_first_section', $home_first_section);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $home_first_section = Home_first_section::find($id);
        return view("admins.home_first_section.edit")->with('home_first_section', $home_first_section);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $home_first_section = Home_first_section::find($id);
        $input = $request->all();
        if ($image = $request->file('image')) {
            # code...
            $path = "admins/assets/img/homepage/home_first_section/";
            $file = date("YmdHis") . "." . $image->getClientOriginalExtension();
            $image->move($path, $file);
            $input['image'] = $file;
        } else {
            unset($input['image']);
        }
        $home_first_section->update($input);
        return redirect("first-section")->with("flash_message", "Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $home_first_section = Home_first_section::destroy($id);
        return redirect("first-section")->with("flash_message", "Data Deleted Successfully");
    }
}
