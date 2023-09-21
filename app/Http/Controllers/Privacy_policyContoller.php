<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Privacy_policy;

class Privacy_policyContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $privacy_policies = Privacy_policy::all();
        return view("admins.privacy_policies.index")->with('privacy_policies',$privacy_policies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admins.privacy_policies.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Privacy_policy::create($input);
        return redirect("privacy-policy")->with("flash_message","Data Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $privacy_policies = Privacy_policy::find($id);
        return view("admins.privacy_policies.show")->with('privacy_policies',$privacy_policies);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $privacy_policies = Privacy_policy::find($id);
        return view("admins.privacy_policies.edit")->with('privacy_policies',$privacy_policies);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $privacy_policies = Privacy_policy::find($id);
        $input = $request->all();
        $privacy_policies->update($input);
        return redirect("privacy-policy")->with("flash_message","Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $privacy_policies = Privacy_policy::destroy($id);
        return redirect("privacy-policy")->with("flash_message","Data Deleted Successfully");
    }
}