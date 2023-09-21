<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career_page;


class Career_pageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $career_page = Career_page::all();
        return view("admins.career_page.index")->with('career_page', $career_page);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admins.career_page.create");
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
            $path = "admins/assets/img/careers/";
            $file = date("YmdHis") . "." . $header_image->getClientOriginalExtension();
            $header_image->move($path, $file);
            $input['header_image'] = $file;
        }
        Career_page::create($input);
        return redirect("career-page")->with("flash_message", "Data Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $career_page = Career_page::find($id);
        return view("admins.career_page.show")->with('career_page', $career_page);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $career_page = Career_page::find($id);
        return view("admins.career_page.edit")->with('career_page', $career_page);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $career_page = Career_page::find($id);
        $input = $request->all();
        if ($header_image = $request->file('header_image')) {
            # code...
            $path = "admins/assets/img/careers/";
            $file = date("YmdHis") . "." . $header_image->getClientOriginalExtension();
            $header_image->move($path, $file);
            $input['header_image'] = $file;
        } else {
            unset($input['header_image']);
        }
        $career_page->update($input);
        return redirect("career-page")->with("flash_message", "Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $career_page = Career_page::destroy($id);
        return redirect("career-page")->with("flash_message", "Data Deleted Successfully");
    }
}
