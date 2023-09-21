<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultancy;


class ConsultancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $consulties = Consultancy::all();
        return view("admins.consulties.index")->with('consulties',$consulties);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admins.consulties.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Consultancy::create($input);
        return redirect("consultancy")->with("flash_message","Data Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $consulties = Consultancy::find($id);
        return view("admins.consulties.show")->with('consulties',$consulties);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $consulties = Consultancy::find($id);
        return view("admins.consulties.edit")->with('consulties',$consulties);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $consulties = Consultancy::find($id);
        $input = $request->all();
        $consulties->update($input);
        return redirect("consultancy")->with("flash_message","Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $consulties = Consultancy::destroy($id);
        return redirect("consultancy")->with("flash_message","Data Deleted Successfully");
    }
}
