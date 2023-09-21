<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function dashboard()
    {
        return view('admins.index');
    }

    public function admin_login()
    {
        return view('admins.auth.login');
    }

    public function admin_login_store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('admin/dashboard');
        } else {
            // Authentication failed
            return redirect('admin/login')->with('error', 'The email or password is incorrect.');
        }
    }
    public function admin_changepass()
    {
        return view('admins.auth.changepass');
    }

    public function admin_logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        return redirect('admin/login');
    }

    public function admin_updatepass(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => [
                'required',
                'email',
                Rule::exists('admins')->where(function ($query) use ($request) {
                    // Check if the email exists in the 'admins' table
                    $query->where('email', $request->email);
                }),
            ],
            'old_password' => [
                'required',
                function ($attribute, $value, $fail) use ($request) {
                    // Check if the old password is correct
                    if (!Hash::check($value, Auth::guard('admin')->user()->password)) {
                        $fail('The old password is incorrect.');
                    }
                },
            ],
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ], [
            'confirm_password.same' => 'The new password and confirmation must match.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Update the password
        $user = Auth::guard('admin')->user();
        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return redirect('admin/login')->with('flash_message', 'Password updated successfully.');
    }





    public function admin_profile(){
        return view('admins.auth.profile');
  }

    public function admin_profile_update(Request $request)
    {
        $admin = Auth::guard('admin')->user();

        if ($profile_image = $request->file('profile_image')) {
            # code...
            $path = "admins/assets/img/profile_image/";
            $file = date("YmdHis") . "." . $profile_image->getClientOriginalExtension();
            $profile_image->move($path, $file);
            $profile_image = $file;
        }else {
            unset($profile_image);
        }

        $admin->update([
            'profile_image' => $profile_image,
            'fullname' => $request->fullname,
            'email' => $request->email,
        ]);

        return redirect("admin/profile")->with("success", "Profile Updated Successfully");
    }

}