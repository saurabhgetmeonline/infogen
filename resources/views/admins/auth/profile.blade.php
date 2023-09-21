@extends('admins.layout')
@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    @if(Session::has('success'))<h5 class="card-header" style="color:green;">
                        {{Session::get('success')}}</span></h5>@endif
                    <!-- Account -->
                    <form action="{{url('/admin/profile/update')}}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="/admins/assets/img/profile_image/{{ Auth::guard('admin')->user()->profile_image}}"
                                    alt="user-avatar" class="d-block rounded" height="100" width="100"
                                    id="uploadedAvatar" />
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" id="upload" name="profile_image" class="account-file-input" hidden
                                            accept="image/png, image/jpeg" />
                                    </label>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="firstName" class="form-label">Full Name</label>
                                        <input class="form-control" type="text" id="fullname" name="fullname"
                                            value="{{ Auth::guard('admin')->user()->fullname}}" autofocus />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="lastName" class="form-label">User Name</label>
                                        <input class="form-control" type="text" name="username" id="username"
                                            value="{{ Auth::guard('admin')->user()->username}}" disabled />
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input class="form-control" type="text" id="email" name="email"
                                            value="{{ Auth::guard('admin')->user()->email}}" />
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                </div>
                            </div>
                            <!-- /Account -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

    @stop