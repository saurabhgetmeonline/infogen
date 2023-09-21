<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progress;


class ProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $progress = Progress::all();
        return view("admins.progress.index")->with('progress',$progress);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admins.progress.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        if ($progress_image = $request->file('progress_image')) {
            # code...
            $path ="admins/assets/img/homepage/progress/";
            $file = date("YmdHis").".".$progress_image->getClientOriginalExtension();
            $progress_image->move($path,$file);
            $input['progress_image'] = $file;
        }
        Progress::create($input);
        return redirect("progress")->with("flash_message","Data Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $progress = Progress::find($id);
        return view("admins.progress.show")->with('progress',$progress);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $progress = Progress::find($id);
        return view("admins.progress.edit")->with('progress',$progress);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $progress = Progress::find($id);
        $input = $request->all();
        if ($progress_image = $request->file('progress_image')) {
            # code...
            $path ="admins/assets/img/homepage/progress/";
            $file = date("YmdHis").".".$progress_image->getClientOriginalExtension();
            $progress_image->move($path,$file);
            $input['progress_image'] = $file;
        }else{
            unset($input['progress_image']);
        }
        $progress->update($input);
        return redirect("progress")->with("flash_message","Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
         $progress = Progress::destroy($id);
        return redirect("progress")->with("flash_message","Data Deleted Successfully");
    }
}