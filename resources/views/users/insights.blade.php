@extends('users.layout')
 @section('content')
    <section class="insights-banner-section">
        @foreach($insights as $insight)
        <img src="/admins/assets/img/insights/header_image/{{$insight->header_image}}" alt="">
        @endforeach
    </section>

    <section class="insights-section-2">
        <h1 id="insights-section-2-header">INSIGHTS</h1>
        <div class="insights-section-2-content">
            @foreach($insight_posts as $insight_post)
            <div class="insights-section-2-content-card">
                <div class="insights-section-2-content-card-image-wrapper">
                    <img src="/admins/assets/img/insights/featured_image/{{$insight_post->featured_image}}" alt="">
                </div>
                <h2 class="insights-section-2-content-card-heading">{{$insight_post->heading}}</h2>
                <p class="insights-section-2-content-card-para">{{$insight_post->sort_description}}</p>
                <a class="insights-section-2-content-card-link" href="{{url('insights/'.$insight_post->slug)}}"><button>Read More</button></a>
            </div>
            @endforeach
            <div class="insights-section-2-content-text">
            @foreach($related_posts as $related_post)
                <div class="insights-section-2-content-text-one-event">
                    <h2 class="insights-section-2-content-text-one-event-heading">{{$related_post->heading}}</h2>
                    <p class="insights-section-2-content-text-one-event-para">{{$related_post->sort_description}}</p>
                    <a class="insights-section-2-content-text-one-event-link" href="{{url('insights/'.$related_post->slug)}}">Upcoming article</a>
                </div>
            @endforeach
            </div>
        </div>
    </section>

    <section class="insights-banner-2-section">
        @foreach($insights as $insight)
        <div class="insights-banner-2-section-left-part">
            <img src="/admins/assets/img/insights/small_image/{{$insight->small_image}}" alt="">
        </div>
        <div class="insights-banner-2-section-right-part">
            <h2 class="insights-banner-2-section-right-part-heading">{{$insight->heading}}</h2>
            <p class="insights-banner-2-section-right-part-para">{{$insight->description}}</p>
        </div>
        @endforeach
    </section>


    <div class="parent-insights-cards-section">
        <section class="insights-cards-section">
        @foreach($other_posts as $other_post)
            <div class="insights-cards-section-card">
                <div class="insights-cards-section-card-image-wrapper">
                    <img src="/admins/assets/img/insights/featured_image/{{$other_post->featured_image}}" alt="">
                </div>
                <h2 class="insights-cards-section-card-heading">{{$other_post->heading}}</h2>
                <p class="insights-cards-section-card-para">{{$other_post->sort_description}}</p>
                <a class="insights-section-2-content-card-link" href="{{url('insights/'.$other_post->slug)}}"><p>Read More</p></a>
            </div>
        @endforeach
        </section>

        <div class="insights-cards-section-view-more">
            <button class="insights-cards-section-view-more-btn">View More</button>
        </div>

    </div>
    @stop