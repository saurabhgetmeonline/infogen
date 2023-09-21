<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report_category;


class Report_categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $report_categories = Report_category::all();
        return view("admins.report_categories.index")->with('report_categories',$report_categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admins.report_categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $input = $request->all();
        ['report_category_name'=>request('report_category_name')];
        if ($report_category_image = $request->file('report_category_image')) {
            # code...
            $path ="admins/assets/img/reports/category_image/";
            $file = date("YmdHis").".".$report_category_image->getClientOriginalExtension();
            $report_category_image->move($path,$file);
            $input['report_category_image'] = $file;
        }
        Report_category::create($input);
        return redirect("report_category")->with("flash_message","Data Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $report_categories = Report_category::find($id);
        return view("admins.report_categories.show")->with('report_categories',$report_categories);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $report_categories = Report_category::find($id);
        return view("admins.report_categories.edit")->with('report_categories',$report_categories);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $report_categories = Report_category::find($id);
        $input = $request->all();
        ['report_category_name'=>request('report_category_name')];
         if ($report_category_image = $request->file('report_category_image')) {
            # code...
            $path ="admins/assets/img/reports/category_image/";
            $file = date("YmdHis").".".$report_category_image->getClientOriginalExtension();
            $report_category_image->move($path,$file);
            $input['report_category_image'] = $file;
        }else{
            unset($input['report_category_image']);
        }
        $report_categories->update($input);
        return redirect("report_category")->with("flash_message","Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $report_categories = Report_category::destroy($id);
        return redirect("report_category")->with("flash_message","Data Deleted Successfully");
    }
}
