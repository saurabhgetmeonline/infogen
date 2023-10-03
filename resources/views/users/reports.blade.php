@extends('users.layout')
@section('content')
@php
use Carbon\Carbon;
@endphp
<link rel="stylesheet" href="/users/css/reports.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div>
    <form class="input-search-box input-serach-box-market-reports">
        <input type="search" name="search" id="input-search" placeholder="Search Report">
        <button type="submit" class="search-icon-div">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </form>
</div>
<section class="market-reports-heading">
    Market Reports
</section>
<section id="reports-main-body">
    <aside class="reports-main-body-left-side-bar">
        <h1 id="reports-main-body-left-side-bar-heading">Categories</h1>
        <ul class="reports-main-body-left-side-bar-categories-lists">
            @foreach($report_categories as $report_category)
            <!-- <li><a href="{{url('reports/'.$report_category->slug)}}">{{$report_category->report_category_name}}</a></li> -->
            <li><a href="{{url('reports/'.$report_category->slug)}}">{{$report_category->report_category_name}}</a></li>
            @endforeach
        </ul>
    </aside>
    <section class="reports-main-body-categories-display-area">
        @foreach($report_views as $report_view)
        <h1 id="selected-category-heading" class="reports-main-body-categories-display-area-heading">
            {{$report_view->category}}
        </h1>
        @break
        @endforeach
        <div class="reports-main-body-categories-display-area-main-content">

            @if(isset($firstCategoryData) && !$firstCategoryData->isEmpty())
            <div class="reports-main-body-categories-display-area-all-cards">
                @foreach($firstCategoryData as $report_view)
                <div class="reports-main-body-categories-display-area-single-card">
                    <div class="display-area-single-card-image-wrapper">
                        <img src="/admins/assets/img/reports/display_image/{{$report_view->display_image}}" alt="{{$report_view->display_image}}">
                        <div class="display-area-single-card-image-texts">
                            <h4 class="display-area-single-card-image-texts-heading">Report Code:
                                {{$report_view->report_code}}
                            </h4>
                            <p class="display-area-single-card-image-texts-para">Published On:
                                {{Carbon::parse($report_view->published_on)->format('F d, Y')}}
                            </p>
                        </div>
                    </div>
                    <h4 class="display-area-single-card-text">{{$report_view->heading}}</h4>
                    <h4 class="display-area-single-card-text-read-more-link"><a href="{{url('reports/'.$report_view->report_view_id .'/'.$report_view->slug)}}">Read
                            More<img src="/users/images/reports/Vector (4).png" alt="" style="width: 12px; margin-left: 7px;"></a></h4>
                </div>
                @endforeach
                {{$firstCategoryData->links()}}
            </div>
            @else
            <div class="reports-main-body-categories-display-area-all-cards">
                @foreach($report_views as $report_view)
                <div class="reports-main-body-categories-display-area-single-card">
                    <div class="display-area-single-card-image-wrapper">
                        <img src="/admins/assets/img/reports/featured_image/{{$report_view->featured_image}}" alt="{{$report_view->featured_image}}">
                        <div class="display-area-single-card-image-texts">
                            <h4 class="display-area-single-card-image-texts-heading">Report Code:
                                {{$report_view->report_code}}
                            </h4>
                            <p class="display-area-single-card-image-texts-para">Published On:
                                {{Carbon::parse($report_view->published_on)->format('F d, Y')}}
                            </p>
                        </div>
                    </div>
                    <h4 class="display-area-single-card-text">{{$report_view->heading}}</h4>
                    <h4 class="display-area-single-card-text-read-more-link"><a href="{{url('reports/'.$report_view->report_view_id .'/'.$report_view->slug)}}">Read
                            More<img src="/users/images/reports/Vector (4).png" alt="" style="width: 12px; margin-left: 7px;"></a></h4>
                </div>
                @endforeach
            </div>
            @endif
        </div>
        <div class="my-pagination-wrapper">
            <section id="my-pagination">
                {{$report_views->links('vendor.pagination.custom')}}
            </section>
        </div>
    </section>
</section>
@stop