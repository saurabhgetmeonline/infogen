@extends('users.layout')
@section('content')
<section id="about-us-banner-section">
    @foreach($abouts as $about)
    <img src="/admins/assets/img/aboutus/header_image/{{$about->header_image}}" alt="{{$about->header_image}}">
    @endforeach
</section>

<section class="what-we-do-section">
    @foreach($abouts as $about)
    {!! $about->text !!}
    @endforeach
</section>



<section class="tab-container">
    <div class="tabs">
        <div class="tab active" onclick="showContent('vision', this)">Our Vision</div>
        <div class="tab" onclick="showContent('mission', this)">Our Mission</div>
        <div class="tab" onclick="showContent('values', this)">Our Values</div>
    </div>
    <div class="tab-content-container active" id="vision-content">
        <!-- <h2>Our Vision</h2> -->
        @foreach($abouts as $about)
        <p>{!! $about->vision !!}</p>
        @endforeach
    </div>
    <div class="tab-content-container" id="mission-content">
        <!-- <h2>Our Mission</h2> -->
        @foreach($abouts as $about)
        <p>{!! $about->mission !!}</p>
        @endforeach
    </div>
    <div class="tab-content-container" id="values-content">
        <!-- <h2>Our Values</h2> -->
        @foreach($abouts as $about)
        <p>{!! $about->values !!}</p>
        @endforeach
    </div>
</section>

<script>
    function showContent(tabName, clickedTab) {
        const tabContents = document.querySelectorAll('.tab-content-container');
        for (let i = 0; i < tabContents.length; i++) {
            tabContents[i].classList.remove('active');
        }

        const tabs = document.querySelectorAll('.tab');
        for (let i = 0; i < tabs.length; i++) {
            tabs[i].classList.remove('active');
        }

        const selectedContent = document.getElementById(tabName + '-content');
        selectedContent.classList.add('active');
        clickedTab.classList.add('active');
    }
</script>
@stop