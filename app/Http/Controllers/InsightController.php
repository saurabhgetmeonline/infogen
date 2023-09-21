<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insight;


class InsightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $insights = Insight::all();
        return view("admins.insights.index")->with('insights',$insights);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admins.insights.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        if ($header_image = $request->file('header_image')) {
            # code...
            $path ="admins/assets/img/insights/header_image/";
            $file = date("YmdHis").".".$header_image->getClientOriginalExtension();
            $header_image->move($path,$file);
            $input['header_image'] = $file;
        }
        if ($small_image = $request->file('small_image')) {
            # code...
            $path ="admins/assets/img/insights/small_image/";
            $file = date("YmdHis").".".$small_image->getClientOriginalExtension();
            $small_image->move($path,$file);
            $input['small_image'] = $file;
        }

    Insight::create($input);

    return redirect("insight")->with("flash_message", "Data Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $insights = Insight::find($id);
        return view("admins.insights.show")->with('insights',$insights);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $insights = Insight::find($id);
        return view("admins.insights.edit")->with('insights',$insights);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $insights = Insight::find($id);
        $input = $request->all();
       if ($header_image = $request->file('header_image')) {
            # code...
            $path ="admins/assets/img/insights/header_image/";
            $file = date("YmdHis").".".$header_image->getClientOriginalExtension();
            $header_image->move($path,$file);
            $input['header_image'] = $file;
        }else{
            unset($input['header_image']);
        }
        if ($small_image = $request->file('small_image')) {
            # code...
            $path ="admins/assets/img/insights/small_image/";
            $file = date("YmdHis").".".$small_image->getClientOriginalExtension();
            $small_image->move($path,$file);
            $input['small_image'] = $file;
        }else{
            unset($input['small_image']);
        }
        $insights->update($input);
        return redirect("insight")->with("flash_message","Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $insights = Insight::destroy($id);
        return redirect("insight")->with("flash_message","Data Deleted Successfully");
    }
}
