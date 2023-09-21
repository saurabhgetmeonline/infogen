@extends('users.layout')
@section('content')
<div id="view-more-001">
    <h2>Careers</h2>
</div>

<section class="carrers-redirect-view-more">
    <h2 class="carrers-redirect-view-more-heading">{{$careers->position}}</h2>
    <p class="carrers-redirect-view-more-para">
        {{$careers->location}}, {{$careers->job_type}} ({{$careers->location_type}})
    </p>
    <div class="parent-apply-save">
        <a href="{{url('apply-form')}}"><button class="apply-now-btn">Apply now</button></a>
    </div>

    <div class="job-details">
        <p class="job-details-heading">About Job:</p>
        <p>Job title: {{$careers->position}}</p>

        <p class="comp-overview-1">Company Overview: </p>
        <p class="comp-overview-2">{{$careers->company_name}}</p>
        <p class="job-details-data-para">{{$careers->description}}</p>

        <div class="job-summary-box">
            <p>Job summary:</p>
            <p>{{$careers->summary}}</p>
        </div>
    </div>
</section>
@stop