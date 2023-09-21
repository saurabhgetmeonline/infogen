<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/users/css/repports-view-more.css">
</head>

<body>
    @php
    use Carbon\Carbon;
    @endphp
<section class="reports-card-view-more-section">
        <div class="view-more-card">
            <div class="view-more-card-image-wrapper">
                <img src="/admins/assets/img/insights/thumbnail_image/{{$insight_posts->thumbnail_image}}" alt=""> 
            </div>    
            <div class="view-more-card-text-wrapper">
                <h4 class="view-more-card-text-heading">{{$insight_posts->heading}}</h4>
                <p class="view-more-card-text-para">{{$insight_posts->sort_description}}</p>
            </div>
         </div>
    </section>

    <section class="reports-card-view-more-info-section">
        <div class="view-more-info-section-subtitle">Report Code: {{$insight_posts->report_code}}</div>
        <div class="view-more-info-section-subtitle">Published
            {{Carbon::parse($insight_posts->published_on)->format('F d, Y')}}</div>
        <div class="view-more-info-section-subtitle">Pages: {{$insight_posts->page}}</div>
        <div class="view-more-info-section-subtitle">Category: {{$insight_posts->category}}</div>
    </section>


    <section class="reports-view-more-banner-image">
        <img src="/admins/assets/img/insights/featured_image/{{$insight_posts->featured_image}}" alt="{{$insight_posts->featured_image}}" alt="">
    </section>




    <section class="reports-view-more-main-content">
        <div class="main-content-left-side-box">
            <!-- DEFAULT CONTENT -->
            <div class="wrapper-main-content-left-side-box-default-content">
                <div class="main-content-left-side-box-default-content-1">
                    <p>{!! $insight_posts->text !!}</p>
                </div>
            </div>
        </div>
       
        <div class="main-content-right-side-box">
            <div class="main-content-right-side-box-why-choose-us">
                <h2 class="main-content-right-side-box-why-choose-us-heading">Why Choose Us?</h2>
                <div class="main-content-right-side-box-why-choose-us-rows-box">
                    @foreach($why_choose_us as $data)
                    <div class="main-content-right-side-box-why-choose-us-row-1">
                        <h3>{{$data->heading}}</h3>
                        <p class="main-content-right-side-box-why-choose-us-row-1-para">{{$data->description}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</body>

</html>