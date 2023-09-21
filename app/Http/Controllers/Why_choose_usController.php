<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Why_choose_us;

class Why_choose_usController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $why_choose_us = Why_choose_us::all();
        return view("admins.why_choose_us.index")->with('why_choose_us', $why_choose_us);
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admins.why_choose_us.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Why_choose_us::create($input);
        return redirect("why-choose-us")->with("flash_message", "Data Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $why_choose_us = Why_choose_us::find($id);
        return view("admins.why_choose_us.show")->with('why_choose_us', $why_choose_us);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $why_choose_us = Why_choose_us::find($id);
        return view("admins.why_choose_us.edit")->with('why_choose_us', $why_choose_us);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $why_choose_us = Why_choose_us::find($id);
        $input = $request->all();
        $why_choose_us->update($input);
        return redirect("why-choose-us")->with("flash_message", "Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $why_choose_us = Why_choose_us::destroy($id);
        return redirect("why-choose-us")->with("flash_message", "Data Deleted Successfully");
    }
}
