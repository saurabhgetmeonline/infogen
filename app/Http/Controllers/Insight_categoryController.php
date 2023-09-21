<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insight_category;


class Insight_categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $insight_categories = Insight_category::all();
        return view("admins.insight_categories.index")->with('insight_categories',$insight_categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admins.insight_categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        ['insight_category_name'=>request('insight_category_name')];
        Insight_category::create($input);
        return redirect("insight-category")->with("flash_message","Data Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $insight_categories = Insight_category::find($id);
        return view("admins.insight_categories.show")->with('insight_categories',$insight_categories);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
         $insight_categories = Insight_category::find($id);
        return view("admins.insight_categories.edit")->with('insight_categories',$insight_categories);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $insight_categories = Insight_category::find($id);
        $input = $request->all();
        ['insight_category_name'=>request('insight_category_name')];
        $insight_categories->update($input);
        return redirect("insight-category")->with("flash_message","Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $insight_categories = Insight_category::destroy($id);
        return redirect("insight-category")->with("flash_message","Data Deleted Successfully");
    }
}
