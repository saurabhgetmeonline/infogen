<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infogence</title>
    <link rel="stylesheet" href="/users/index.css">
    <link rel="stylesheet" href="/users/css/about-us.css">
    <link rel="stylesheet" href="/users/css/careers.css">
    <link rel="stylesheet" href="/users/css/insights.css">
    <link rel="stylesheet" href="/users/css/jobdetail.css">
    <link rel="stylesheet" href="/users/css/faqs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>

<body>
    <a id="button"></a>
    <!-- Header Section -->
    <div id="parent-of-header-and-hamburger-section">
        <header class="main-header">
            <div class="main-header-logo-box">
                <a href="{{url('/')}}"><img class="final-1-icon" alt="" src="/users/images/final-1@2x.png" /></a>
            </div>

            <ul class="main-header-nav-bar-box hidden" id="menu-list">
                <li id="home"><a href="{{url('/')}}">HOME</a></li>
                <li id="about-us"><a href="{{url('/aboutus')}}">ABOUT US</a></li>
                <li id="reports"><a href="{{url('/reports')}}">REPORTS</a></li>
                <li id="insights"><a href="{{url('/insights')}}">INSIGHTS</a></li>
                <li id="careers"><a href="{{url('/careers')}}">CAREERS</a></li>
                <li id="contact-us"><a href="{{url('/contactus')}}">CONTACT US</a></li>
            </ul>

            <!-- <div id="login-wrapper">
                <button id="login-btn">LOGIN</button>
            </div> -->
        </header>

        <section class="mobile-menu hidden" onclick="togglemenu()">
            <img src="/users/images/menu.png.png" alt="" style="width: 30px;">
        </section>

    </div>