@extends('users.layout')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<section id="faq" class="faq">
    <div class="container">

        <div class="section-title">
            <h2>F.A.Q</h2>
        </div>

        <ul class="accordion">
            @foreach($faqs as $faq)
            <li class="accordion-item">
                <h3 class="accordion-thumb">{{$faq->heading}}</h3>
                <p class="accordion-panel">
                    {{$faq->description}} 
                </p>
            </li>
            @endforeach
        </ul>

    </div>
</section>
<script>
$(function() {
    // (Optional) Active an item if it has the class "is-active"	
    $(".accordion > .accordion-item.is-active").children(".accordion-panel").slideDown();

    $(".accordion > .accordion-item").click(function() {
        // Cancel the siblings
        $(this).siblings(".accordion-item").removeClass("is-active").children(".accordion-panel")
            .slideUp();
        // Toggle the item
        $(this).toggleClass("is-active").children(".accordion-panel").slideToggle("ease-out");
    });
});
</script>
@stop