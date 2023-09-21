<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $faqs = Faq::all();
        return view("admins.faqs.index")->with('faqs',$faqs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admins.faqs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Faq::create($input);
        return redirect("faq")->with("flash_message","Data Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $faqs = Faq::find($id);
        return view("admins.faqs.show")->with('faqs',$faqs);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $faqs = Faq::find($id);
        return view("admins.faqs.edit")->with('faqs',$faqs);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $faqs = Faq::find($id);
        $input = $request->all();
        $faqs->update($input);
        return redirect("faq")->with("flash_message","Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $faqs = Faq::destroy($id);
        return redirect("faq")->with("flash_message","Data Deleted Successfully");
    }
}
