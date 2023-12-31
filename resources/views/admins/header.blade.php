<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="/admins/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Infogence - Admin Panel</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/admins/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/admins/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/admins/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/admins/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/admins/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/admins/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- amsify CSS -->
    <link rel="stylesheet" href="/admins/assets/amsify/amsify.suggestags.css" />

    <link rel="stylesheet" href="/admins/assets/vendor/libs/apex-charts/apex-charts.css" />
    <!-- datatables CSS -->

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />


    <!-- Helpers -->
    <script src="/admins/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/admins/assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{url('admin/dashboard')}}" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
                                    <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
                                    <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
                                    <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
                                </defs>
                                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                        <g id="Icon" transform="translate(27.000000, 15.000000)">
                                            <g id="Mask" transform="translate(0.000000, 8.000000)">
                                                <mask id="mask-2" fill="white">
                                                    <use xlink:href="#path-1"></use>
                                                </mask>
                                                <use fill="#696cff" xlink:href="#path-1"></use>
                                                <g id="Path-3" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-3"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                                </g>
                                                <g id="Path-4" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-4"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                                </g>
                                            </g>
                                            <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                                <use fill="#696cff" xlink:href="#path-5"></use>
                                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">infogence</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item {{Request::is('admin/dashboard') ? 'active' : ''}}">
                        <a href="{{url('/admin/dashboard')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <!-- Forms & Tables -->
                    <!-- Forms -->
                    <li class="menu-item {{Request::is('banner') || Request::is('progress') || Request::is('category') || Request::is('industry') || Request::is('report') || Request::is('consultancy') || Request::is('first-section') ? 'open active' : ''}}">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Form Layouts">Home Page</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item {{Request::is('first-section') ? 'active' : ''}}">
                                <a href="{{url('/first-section')}}" class="menu-link">
                                    <div data-i18n="Horizontal Form">First Section</div>
                                </a>
                            </li>
                            <li class="menu-item {{Request::is('banner') ? 'active' : ''}}">
                                <a href="{{url('/banner')}}" class="menu-link">
                                    <div data-i18n="Horizontal Form">Banners</div>
                                </a>
                            </li>
                            <li class="menu-item {{Request::is('progress') ? 'active' : ''}}">
                                <a href="{{url('/progress')}}" class="menu-link">
                                    <div data-i18n="Horizontal Form">Progress</div>
                                </a>
                            </li>
                            <li class="menu-item {{Request::is('industry') ? 'active' : ''}}">
                                <a href="{{url('/industry')}}" class="menu-link">
                                    <div data-i18n="Horizontal Form">Industry</div>
                                </a>
                            </li>
                            <li class="menu-item {{Request::is('consultancy') ? 'active' : ''}}">
                                <a href="{{url('/consultancy')}}" class="menu-link">
                                    <div data-i18n="Horizontal Form">Consultancy</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item {{Request::is('career') || Request::is('career-page')  ? 'open active' : ''}}">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Form Layouts">Career</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item {{Request::is('career') ? 'active' : ''}}">
                                <a href="{{url('/career')}}" class="menu-link">
                                    <div data-i18n="Basic">Jobs</div>
                                </a>
                            </li>
                            <li class="menu-item {{Request::is('career-page') ? 'active' : ''}}">
                                <a href="{{url('/career-page')}}" class="menu-link">
                                    <div data-i18n="Horizontal Form">Career Page</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item {{Request::is('term-condition') ? 'active' : ''}}">
                        <a href="{{url('/term-condition')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic">Terms and Condition

                            </div>
                        </a>
                    </li>
                    <li class="menu-item {{Request::is('privacy-policy') ? 'active' : ''}}">
                        <a href="{{url('/privacy-policy')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic">Privacy Policy


                            </div>
                        </a>
                    </li>
                    <li class="menu-item {{Request::is('gdpr-policy') ? 'active' : ''}}">
                        <a href="{{url('/gdpr-policy')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic">GDPR Policy

                            </div>
                        </a>
                    </li>
                    <li class="menu-item {{Request::is('about') ? 'active' : ''}}">
                        <a href="{{url('/about')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic">About Us

                            </div>
                        </a>
                    </li>
                    <li class="menu-item {{Request::is('report_category') || Request::is('report-view') ? 'open active' : ''}}">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Form Layouts">Reports</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item {{Request::is('report_category') ? 'active' : ''}}">
                                <a href="{{url('/report_category')}}" class="menu-link">
                                    <div data-i18n="Horizontal Form">Report Categories</div>
                                </a>
                            </li>
                            <li class="menu-item {{Request::is('report-view') ? 'active' : ''}}">
                                <a href="{{url('/report-view')}}" class="menu-link">
                                    <div data-i18n="Horizontal Form">Report View</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item {{Request::is('insight') || Request::is('insight_post') || Request::is('insight-category') ? 'open active' : ''}}">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Form Layouts">Insights</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item {{Request::is('insight') ? 'active' : ''}}">
                                <a href="{{url('/insight')}}" class="menu-link">
                                    <div data-i18n="Horizontal Form">Insight</div>
                                </a>
                            </li>
                            <li class="menu-item {{Request::is('insight-post') ? 'active' : ''}}">
                                <a href="{{url('/insight-post')}}" class="menu-link">
                                    <div data-i18n="Horizontal Form">Insight Post</div>
                                </a>
                            </li>
                            <li class="menu-item {{Request::is('insight-category') ? 'active' : ''}}">
                                <a href="{{url('/insight-category')}}" class="menu-link">
                                    <div data-i18n="Horizontal Form">Insight Categories</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item {{Request::is('faq') ? 'active' : ''}}">
                        <a href="{{url('/faq')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic">Faqs</div>
                        </a>
                    </li>
                    <li class="menu-item {{Request::is('order') || Request::is('order-view') ? 'open active' : ''}}">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Form Layouts">Orders</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item {{Request::is('order') ? 'active' : ''}}">
                                <a href="{{url('/order')}}" class="menu-link">
                                    <div data-i18n="Horizontal Form">Order</div>
                                </a>
                            </li>
                            <li class="menu-item {{Request::is('order-view') ? 'active' : ''}}">
                                <a href="{{url('/order-view')}}" class="menu-link">
                                    <div data-i18n="Horizontal Form">Order View</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item {{Request::is('admin/user') || Request::is('permission') ? 'open active' : ''}}">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Form Layouts">Access</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item {{Request::is('admin/user') ? 'active' : ''}}">
                                <a href="{{url('/admin/user')}}" class="menu-link">
                                    <div data-i18n="Horizontal Form">Admin</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item {{Request::is('why-choose-us') ? 'active' : ''}}">
                        <a href="{{url('why-choose-us')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic">Why Choose Us
                            </div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <ul class="navbar-nav flex-row align-items-center ms-auto">

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="/admins/assets/img/profile_image/{{ Auth::guard('admin')->user()->profile_image }}" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="/admins/assets/img/profile_image/{{ Auth::guard('admin')->user()->profile_image }}" alt class="w-px-40 h-auto rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block">{{ Auth::guard('admin')->user()->fullname }}</span>
                                                <small class="text-muted">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{url('admin/profile')}}">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">My Profile</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{url('admin/changepass')}}">
                                        <i class="bx bx-lock-open me-2"></i>
                                        <span class="align-middle">Change password</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{url('admin/logout')}}">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </nav>

                <!-- / Navbar -->