<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $careers = Career::all();
        return view("admins.careers.index")->with('careers',$careers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admins.careers.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        ['position'=>request('position')];
        Career::create($input);
        return redirect("career")->with("flash_message","Data Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
         $careers = Career::find($id);
        return view("admins.careers.show")->with('careers',$careers);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
         $careers = Career::find($id);
        return view("admins.careers.edit")->with('careers',$careers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $careers = Career::find($id);
        $input = $request->all();
        ['position'=>request('position')];
        
        $careers->update($input);
        return redirect("career")->with("flash_message","Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $careers = Career::destroy($id);
        return redirect("career")->with("flash_message","Data Deleted Successfully");
    }
}
