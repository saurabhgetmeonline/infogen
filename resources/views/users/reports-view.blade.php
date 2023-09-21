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
                <img src="/admins/assets/img/reports/thumbnail_image/{{$report_views->thumbnail_image}}"
                    alt="{{$report_views->thumbnail_image}}">
            </div>
            <div class="view-more-card-text-wrapper">
                <h4 class="view-more-card-text-heading">{{$report_views->heading}}</h4>
                <p class="view-more-card-text-para">{{$report_views->short_description}}</p>
            </div>
        </div>
    </section>

    <section class="reports-card-view-more-info-section">
        <div class="view-more-info-section-subtitle">Report Code: {{$report_views->report_code}}</div>
        <div class="view-more-info-section-subtitle">Published
            {{Carbon::parse($report_views->published_on)->format('F d, Y')}}</div>
        <div class="view-more-info-section-subtitle">Pages: {{$report_views->page}}</div>
        <div class="view-more-info-section-subtitle">Category:{{$report_views->category}}</div>
    </section>


    <section class="reports-view-more-banner-image">
        <img src="/admins/assets/img/reports/featured_image/{{$report_views->featured_image}}" alt="{{$report_views->featured_image}}">
    </section>




    <section class="reports-view-more-main-content">
        <div class="main-content-left-side-box">
            <div class="main-content-left-side-box-tabs">
                <h4 class="main-content-left-side-box-tabs-heading" id="rd-tab">Request Description</h4>
                <h4 class="main-content-left-side-box-tabs-heading" id="toc-tab">Table of contents</h4>
                <h4 class="main-content-left-side-box-tabs-heading" id="metho-tab">Methodology</h4>
            </div>

            <!-- DEFAULT CONTENT -->
            <div class="wrapper-main-content-left-side-box-default-content">
                <div class="main-content-left-side-box-default-content-1">
                    <p class="main-content-left-side-box-default-content-1-para">{!! $report_views->default_description
                        !!}</p>
                </div>
            </div>


            <!-- TABLE OF CONTENTS -->
            <div class="wrapper-main-content-left-side-box-table-of-contents hidden">
                <p>{!! $report_views->table_of_content !!}</p>
            </div>


            <!-- REQUEST DESCRIPTION -->
            <div class="wrapper-main-content-left-side-box-requests-description hidden">
                <p>
                    {!! $report_views->request_description !!}
                </p>

            </div>

            <!-- Methodology -->
            <div class="wrapper-main-content-left-side-box-methodology hidden">
                <p>{!! $report_views->methodology !!}</p>

            </div>

        </div>


        <div class="main-content-right-side-box">
            <div class="main-content-right-box-content-1">
                <h2 class="main-content-right-box-content-1-heading">PRICING LIST</h2>
                <form action="{{url('reports/'.$report_views->report_view_id.'/payment')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="main-content-right-box-content-1-price-box">
                        <div class="main-content-right-box-content-1-price-box-checkmark">
                            <input type="radio" name="payment" id="single-user"
                                value="${{$report_views->single_user_license}}">
                            <label class="container" for="ravi">SINGLE USER LICENSE</label>
                            <span>${{$report_views->single_user_license}}</span>
                        </div>
                        <div class="main-content-right-box-content-1-price-box-checkmark">
                            <input type="radio" name="payment" id="multi-user"
                                value="${{$report_views->multi_user_license}}">
                            <label class="container" for="ravi">MULTI USER LICENSE</label>
                            <span>${{$report_views->multi_user_license}}</span>
                        </div>
                        <div class="main-content-right-box-content-1-price-box-checkmark">
                            <input type="radio" name="payment" id="corporate-user"
                                value="${{$report_views->enterprise_user_license}}">
                            <label class="container" for="ravi">ENTERPRIZE USER LICENSE</label>
                            <span>${{$report_views->enterprise_user_license}}</span>
                        </div>
                         <a href="{{url('reports/'.$report_views->report_view_id.'/payment')}}" class="main-content-right-box-content-1-price-box-price-btn"><button>Buy Now</button></a>
                    </div>
                </form>
            </div>

            <div class="main-content-right-box-content-1">
                <div class="main-content-right-box-content-1-price-box">
                    <a href="{{url('contactus')}}" class="main-content-right-box-content-1-price-box-price-btn">
                        <h1>Contact us</h1>
                    </a>
                </div>
            </div>

            <div class="main-content-right-side-box-request-btn">
                <a class="main-content-right-side-box-request-btn-link"
                    href="{{url('request-sample/'.$report_views->report_view_id)}}"><button>Request
                        Sample</button></a>
                <a class="main-content-right-side-box-request-btn-link" href="{{url('request-customization/'.$report_views->report_view_id)}}"><button>Request
                        Customization</button></a>
            </div>

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
    <script>
    const defaultContent = document.querySelector('.wrapper-main-content-left-side-box-default-content');
    const toc = document.querySelector('.wrapper-main-content-left-side-box-table-of-contents');
    const requestDesc = document.querySelector('.wrapper-main-content-left-side-box-requests-description');
    const methodology = document.querySelector('.wrapper-main-content-left-side-box-methodology');
    const rdTab = document.querySelector('#rd-tab');
    const tocTab = document.querySelector('#toc-tab');
    const methoTab = document.querySelector('#metho-tab');


    tocTab.addEventListener('click', (() => {
        defaultContent.classList.add('hidden');
        requestDesc.classList.add('hidden');
        methodology.classList.add('hidden');
        toc.classList.remove('hidden');
    }));
    rdTab.addEventListener('click', (() => {
        defaultContent.classList.add('hidden');
        requestDesc.classList.remove('hidden');
        methodology.classList.add('hidden');
        toc.classList.add('hidden');
    }));
    methoTab.addEventListener('click', (() => {
        defaultContent.classList.add('hidden');
        requestDesc.classList.add('hidden');
        methodology.classList.remove('hidden');
        toc.classList.add('hidden');
    }));
    </script>
</body>

</html>