<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Industry;


class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $industries = Industry::all();
        return view("admins.industries.index")->with('industries',$industries);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admins.industries.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $input = $request->all();
        Industry::create($input);
        return redirect("industry")->with("flash_message","Data Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $industries = Industry::find($id);
        return view("admins.industries.show")->with('industries',$industries);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $industries = Industry::find($id);
        return view("admins.industries.edit")->with('industries',$industries);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $industries = Industry::find($id);
        $input = $request->all();
        $industries->update($input);
        return redirect("industry")->with("flash_message","Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $industries = Industry::destroy($id);
        return redirect("industry")->with("flash_message","Data Deleted Successfully");
    }
}
