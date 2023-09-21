@extends('users.layout')
@section('content')
<style>
  .container {
    padding: 100px;
  }
</style>
<div class="container">
  @foreach($term_conditions as $term_condition)
  <p>{!! $term_condition->description !!}</p>
  @endforeach
</div>
@stop