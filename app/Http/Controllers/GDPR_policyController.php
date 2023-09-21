<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GDPR_policy;


class GDPR_policyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $gdpr_policies = GDPR_policy::all();
        return view("admins.gdpr_policies.index")->with('gdpr_policies',$gdpr_policies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admins.gdpr_policies.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        GDPR_policy::create($input);
        return redirect("gdpr-policy")->with("flash_message","Data Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $gdpr_policies = GDPR_policy::find($id);
        return view("admins.gdpr_policies.show")->with('gdpr_policies',$gdpr_policies);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $gdpr_policies = GDPR_policy::find($id);
        return view("admins.gdpr_policies.edit")->with('gdpr_policies',$gdpr_policies);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $gdpr_policies = GDPR_policy::find($id);
        $input = $request->all();
        $gdpr_policies->update($input);
        return redirect("gdpr-policy")->with("flash_message","Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $gdpr_policies = GDPR_policy::destroy($id);
        return redirect("gdpr-policy")->with("flash_message","Data Deleted Successfully");
    }
}