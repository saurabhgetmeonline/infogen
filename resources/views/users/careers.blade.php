@extends('users.layout')
@section('content')
@php
use Carbon\Carbon;
@endphp
<section class="careers-section-banner">
    @foreach($career_page as $value)
    <div id="carrer-section-banner-image">
        <img src="/admins/assets/img/careers/{{$value->header_image}}" alt="{{$value->header_image}}">
    </div>
    <div id="carrers-section-banner-text-box">
        {!! $value->image_text !!}
    </div>
    @endforeach
</section>

<section class="carrers-section-texts-section">
    @foreach($career_page as $value)
    {!! $value->text !!}
    @endforeach
</section>

<section class="careers-section-current-opening-section">
    @foreach($career_page as $value)
    <h1 id="careers-section-current-opening-section-heading">{{$value->career_title}}</h1>@endforeach
    <div id="careers-section-current-opening-section-openings-box">
        @foreach($careers as $career)
        <div class="careers-section-current-opening-section-openings-box-one-opening">
            <h2 class="careers-section-current-opening-section-openings-box-one-opening-heading">{{$career->position}}</h2>
            <div class="careers-section-current-opening-section-openings-box-one-opening-para">
                <span><img src="/users/images/careers/Vector (3).png" alt="" style="width: 20px;">
                    <p>{{Carbon::parse($career->date)->format('F d, Y')}}</p>
                </span>
                <span><img src="/users/images/careers/Group 122.png" alt="" style="width: 15px;">
                    <p>{{$career->location}}</p>
                </span>
                <span><img src="/users/images/careers/Vector (5).png" alt="" style="width: 20px;">
                    <p>{{$career->job_type}} ({{$career->location_type}})</p>
                </span>
            </div>
            <p class="careers-section-current-opening-section-openings-box-one-opening-discription">{{$career->description}}</p>
            <a class="careers-section-current-opening-section-openings-box-one-opening-see-details-link" href="{{url('/careers'.'/'.$career->slug)}}">See details</a>
        </div>
        @endforeach
    </div>
</section>
@stop