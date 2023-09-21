<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use DB;
use Hash;
use Illuminate\Support\Arr;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $admins = Admin::all();
        return view("admins.admin.index")->with('admins', $admins);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admins.admin.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $input['password'] = Hash::make($request->input('password'));
        if ($profile_image = $request->file('profile_image')) {
            # code...
            $path = "admins/assets/img/profile_image/";
            $file = date("YmdHis") . "." . $profile_image->getClientOriginalExtension();
            $profile_image->move($path, $file);
            $input['profile_image'] = $file;
        }
        Admin::create($input);
        return redirect("admin/user")->with("flash_message", "Data Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $admins = Admin::find($id);
        return view("admins.admin.show")->with('admins', $admins);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $admins = Admin::find($id);
        return view("admins.admin.edit")->with('admins',$admins);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $admins = Admin::find($id);
        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }
        if ($profile_image = $request->file('profile_image')) {
            # code...
            $path = "admins/assets/img/profile_image/";
            $file = date("YmdHis") . "." . $profile_image->getClientOriginalExtension();
            $profile_image->move($path, $file);
            $input['profile_image'] = $file;
        } else {
            unset($input['progress_image']);
        }
        $admins->update($input);
        return redirect("admin/user")->with("flash_message", "Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $admins = Admin::destroy($id);
        return redirect("admin/user")->with("flash_message", "Data Deleted Successfully");
    }
}
