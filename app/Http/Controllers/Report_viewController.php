<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report_view;
use App\Models\Report_category;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\DB;



class Report_viewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
         $report_views = Report_view::all();
        return view("admins.report_views.index")->with('report_views',$report_views);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = array(
            'report_categories'=>Report_category::all(),
        );
        return view("admins.report_views.create",$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $input['slug'] = Str::slug($request->slug);
        $category = $input['category'];
        // $getId = DB::table('report_categories')->where('report_category_name',$category)->pluck('report_category_id');
        $getId = DB::table('report_categories')->where('report_category_name', $category)->pluck('report_category_id')->first();
        
        // return $input;
        if($getId){
            $input['category_id'] = $getId;
        }
        // return $input;
        if ($featured_image = $request->file('featured_image')) {
            # code...
            $path ="admins/assets/img/reports/display_image/";
            $file = date("YmdHis").".".$featured_image->getClientOriginalExtension();
            $featured_image->move($path,$file);
            $input['featured_image'] = $file;
        }
        if ($thumbnail_image = $request->file('thumbnail_image')) {
            # code...
            $path ="admins/assets/img/reports/thumbnail_image/";
            $file = date("YmdHis").".".$thumbnail_image->getClientOriginalExtension();
            $thumbnail_image->move($path,$file);
            $input['thumbnail_image'] = $file;
        }
        Report_view::create($input);

        return redirect("report-view")->with("flash_message", "Data Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $report_views = Report_view::find($id);
        return view("admins.report_views.show")->with('report_views',$report_views);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $report_views = Report_view::find($id);
        $data = array(
            'report_categories'=>Report_category::all(),
        );
        return view("admins.report_views.edit",$data)->with('report_views',$report_views);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $report_views = Report_view::find($id);
        $input = $request->all();
        $input['slug'] = Str::slug($request->slug);
        if ($featured_image = $request->file('featured_image')) {
            # code...
            $path ="admins/assets/img/reports/display_image/";
            $file = date("YmdHis").".".$featured_image->getClientOriginalExtension();
            $featured_image->move($path,$file);
            $input['featured_image'] = $file;
        }else{
            unset($input['featured_image']);
        }
        if ($thumbnail_image = $request->file('thumbnail_image')) {
            # code...
            $path ="admins/assets/img/reports/thumbnail_image/";
            $file = date("YmdHis").".".$thumbnail_image->getClientOriginalExtension();
            $thumbnail_image->move($path,$file);
            $input['thumbnail_image'] = $file;
        }else{
            unset($input['thumbnail_image']);
        }
        $report_views->update($input);
        return redirect("report-view")->with("flash_message","Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $report_views = Report_view::destroy($id);
        return redirect("report-view")->with("flash_message","Data Deleted Successfully");
    }

    public function duplicateRow(string $id)
    {
        $report_views = Report_view::findOrFail($id);
        $duplicatedRow = $report_views->replicate();
        $duplicatedRow->save();

        return redirect("report-view")->with('flash_message', 'Row duplicated successfully.');
    }
}