@extends('users.layout')
@section('content')
<style>
  .container {
    padding: 100px;
  }
</style>
<div class="container">
  @foreach($gdpr_policies as $gdpr_policy)
  <p>{!! $gdpr_policy->description !!}</p>
  @endforeach
</div>
@stop