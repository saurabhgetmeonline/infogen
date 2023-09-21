<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Term_condition;


class Term_conditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $term_conditions = Term_condition::all();
        return view("admins.term_conditions.index")->with('term_conditions',$term_conditions);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admins.term_conditions.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Term_condition::create($input);
        return redirect("term-condition")->with("flash_message","Data Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $term_conditions = Term_condition::find($id);
        return view("admins.term_conditions.show")->with('term_conditions',$term_conditions);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $term_conditions = Term_condition::find($id);
        return view("admins.term_conditions.edit")->with('term_conditions',$term_conditions);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $term_conditions = Term_condition::find($id);
        $input = $request->all();
        $term_conditions->update($input);
        return redirect("term-condition")->with("flash_message","Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $term_conditions = Term_condition::destroy($id);
        return redirect("term-condition")->with("flash_message","Data Deleted Successfully");
    }
}