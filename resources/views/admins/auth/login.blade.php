@extends('admins.layouts.app')
@section('title','Login')
@section('content')
<h4 class="mb-4">Login</h4>
@if(session('error'))
<span style="color:red;">
    {{ session('error') }}
</span>
@endif
<form id="formAuthentication" class="mb-3" action="{{url('/admin/login')}}" method="POST">
    {!! csrf_field() !!}
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus value="{{old('email')}}" />
        @error('email') <span style="color:red;">{{$message}}</span>@enderror
    </div>
    <div class="mb-3 form-password-toggle">
        <div class="input-group input-group-merge">
            <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
        @error('password') <span style="color:red;">{{$message}}</span>@enderror
    </div>
    <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
    </div>
</form>
</div>
</div>
<!-- /Register -->
</div>
</div>
</div>
@stop