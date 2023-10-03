@extends('users.layout')
<link rel="stylesheet" href="/users/css/top-bar.css">
<link rel="stylesheet" href="/users/css/slider.css">

<!-- TOP BAR SECTION -->
<div class="contact-bar">
    <p>Contact us at: <a href="tel:+1234567890">+91 93564 39799</a> | <a href="mailto:info@example.com">contact@infogenceglobalresearch.com</a></p>
</div>
@section('content')
<div class="input-search-box">
    <input type="" name="" id="input-search" placeholder="Search Report">
    <span class="search-icon-div">
        <i class="fa fa-search" aria-hidden="true"></i>
    </span>
</div>

<section class="know-more">
    @foreach($home_first_section as $value)
    <div id="know-more-left-side">
        <img src="/admins/assets/img/homepage/home_first_section/{{$value->image}}" alt="{{$value->image}} ">
    </div>
    <div id="know-more-right-side">
        {!! $value->text !!}
        <a href="{{$value->button_url}}"><button id="know-more-btn">{{$value->button_text}}</button></a>
    </div>
    @endforeach
</section>



<div class="banner-slider">
    <div class="slider-container">
        @foreach($banners as $banner)
        <div class="slide">
            <img src="/admins/assets/img/homepage/banners/{{$banner->banner_image}}" alt="{{$banner->banner_image}}">
        </div>
        @endforeach
    </div>
    <button class="prev-btn"><img src="/users/images/Arrow L.png" alt=""></button>
    <button class="next-btn"><img src="/users/images/Arrow R.png" alt=""></button>
</div>
<section class="process-section">
    <h1 class="process-section-heading">Our Process of your Progress</h1>
    <p class="process-section-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste saepe nemo, dicta autem debitis accusamus. Dicta enim optio nemo maiores quam dolorem, officia quia alias?</p>
    <div class="process-section-cards">
        @foreach($progress as $progres)
        <div class="process-section-cards-card-1">
            <div class="process-section-cards-card-1-image-box">
                <img src="/admins/assets/img/homepage/progress/{{$progres->progress_image}}" alt="{{$progres->progress_image}}" style="width: auto; height: 150px;">
            </div>
            <div class="process-section-cards-card-1-text-box">
                <h2 class="process-section-cards-card-1-heading">{{$progres->heading}}</h2>
                <p class="process-section-cards-card-1-para">{{$progres->description}}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>


<section class="our-services-section">
    <h1 class="our-services-section-heading">Our Services</h1>
    <p class="our-services-section-para">
        At Infogence, we understand that the one-size-fits-all approach doesn't cater to the diverse needs of today's fast-paced business environment. That's why we offer a range of services designed to meet various demands, from standardized market reports to tailored consulting services. Here's a closer look at what we offer:
    </p>
</section>
<section class="two-reports-section">
    <div class="two-reports-section-left-one">
        <h1>Syndicated Reports</h1>
        @foreach($industries as $industry)
        {!! $industry->bullet_description !!}
        <p>{{$industry->description}}</p>
        @endforeach
        <a href="{{url('/aboutus')}}"><button>Explore more ➡</button></a>
    </div>
    <div class="two-reports-section-left-one">
        <h1>Consulting Services</h1>
        @foreach($consulties as $consultancy)
        {!! $consultancy->bullet_description !!}
        <p>{{$consultancy->description}}</p>
        @endforeach
        <a href="{{url('/contactus')}}"><button>Explore more ➡</button></a>
    </div>
</section>

<!-- CATEGORIES SECTION-->
<section class="categories-section">
    <h1 class="categories-section-heading">Categories</h1>
    <div class="product">
        <button class="pre-btn"><img src="/users/images/arrow-left.png" alt="" style="width: 15px;"></button>
        <button class="nxt-btn"><img src="/users/images/arrow.png" alt="" style="width: 15px;"></button>
        <div class="product-container categories-section-image-section">
            @foreach($report_categories as $report_category)
            <article class="single-image-box-slider product-card">
                <a href="{{url('reports/'.$report_category->slug)}}">
                    <div class="categories-section-image-section-cards">
                        <img src="/admins/assets/img/reports/category_image/{{$report_category->report_category_image}}" alt="{{$report_category->report_category_image}}">
                        <h2>{{$report_category->report_category_name}}</h2>
                    </div>
                </a>
            </article>
            @endforeach
        </div>
    </div>
</section>

<section class="top-market-reports">
    <h1 class="top-market-reports-heading">Top Market Reports</h1>
    <div class="top-market-reports-cards-section">
        @foreach($report_views as $report_view)
        <div class="cards">
            <div class="image-section">
                <img src="/admins/assets/img/reports/featured_image/{{$report_view->featured_image}}" alt="{{$report_view->featured_image}}">
            </div>
            <p class="text-section">{{$report_view->heading}}</p>
            <div class="know-more-links">
                <a href="{{url('reports/'.$report_view->report_view_id .'/'.$report_view->slug)}}"><Strong>Know More</Strong></a>
            </div>
        </div>
        @endforeach
    </div>
</section>


<!-- <section class="testimonial-section">
      Testimonial Section
    </section> -->

<!-- <section class="our-clients">
        <h1 class="our-client-section-heading">Our Client</h1>
        <div class="our-client-section-image-section">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>
    </section> -->


<script>
    const sliderContainer = document.querySelector(".slider-container");
    const slides = document.querySelectorAll(".slide");
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");

    let currentIndex = 0;
    const intervalTime = 3000;

    function showSlide(index) {
        sliderContainer.style.transform = `translateX(-${index * 100}%)`;
    }

    function nextSlide() {
        currentIndex++;
        if (currentIndex >= slides.length) {
            currentIndex = 0;
        }
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = slides.length - 1;
        }
        showSlide(currentIndex);
    }

    nextBtn.addEventListener("click", nextSlide);
    prevBtn.addEventListener("click", prevSlide);

    // Auto change slides every 2 seconds
    setInterval(nextSlide, intervalTime);
</script>
<script src="/users/js/slider.js" defer></script>
@stop