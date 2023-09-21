@extends('admins.layouts.app')
@section('title','Change Password')
@section('content')
<h4 class="mb-4">Chnage Password</h4>
@if(Session::has('success')) <span style="color:green;">{{Session::get('success')}}</span>@endif
<form id="formAuthentication" class="mb-3" action="{{url('/admin/updatepass')}}" method="POST">
    {!! csrf_field() !!}
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{old('email')}}" />
        @error('email') <span style="color:red;">{{$message}}</span>@enderror
    </div>
    <div class="mb-3 form-password-toggle">
        <label class="form-label" for="old_password">Old Password</label>
        <div class="input-group input-group-merge">
            <input type="password" id="old_password" class="form-control" name="old_password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
        @error('old_password') <span style="color:red;">{{$message}}</span>@enderror
        <div class="mb-3 form-password-toggle">
            <label class="form-label" for="new_password">New Password</label>
            <div class="input-group input-group-merge">
                <input type="password" id="new_password" class="form-control" name="new_password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
            @error('new_password') <span style="color:red;">{{$message}}</span>@enderror
            <div class="mb-3 form-password-toggle">
                <label class="form-label" for="confirm_password">Confirm Password</label>
                <div class="input-group input-group-merge">
                    <input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
            </div>
            <button class="btn btn-primary d-grid w-100" type="submit">Submit</button>
</form>
@stop