@extends('users.layout')
@section('content')
<style>
  .container {
    padding: 100px;
  }
</style>
<div class="container">
  @foreach($privacy_policies as $privacy_policy)
  <p>{!! $privacy_policy->description !!}</p>
  @endforeach
</div>
@stop