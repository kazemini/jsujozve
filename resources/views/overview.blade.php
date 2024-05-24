<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link
        href={{url('assets/css/nucleo-icons-1.css')}}
        rel="stylesheet">
    <link
        href={{url('assets/css/nucleo-svg-1.css')}}
        rel="stylesheet">

    <link
        href={{url('assets/css/all.min.css')}}
        rel="stylesheet">

    <script src="{{url('assets/js/42d5adcbca.js')}}" crossorigin="anonymous"></script>

    <link href="{{url('assets/css/icon-1.css')}}"
          rel="stylesheet">

    <link id="pagestyle"
          href={{url('assets/css/material-dashboard.min-1.css?v=3.0.6')}}
          rel="stylesheet">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{url('assets/css/material-dashboard.min-1.css')}}" rel="stylesheet">
</head>

<body class="rtl g-sidenav-show bg-gray-200">

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret  bg-gradient-dark"
       id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute start-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="../dashboards/analytics-1.html" target="_blank">
            <img src="../../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="me-1 font-weight-bold text-white">Material Dashboard 2 PRO</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse px-0 w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-2 mt-0">
                <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav"
                   role="button" aria-expanded="false">
                    <img src="../../assets/img/team-3.jpg" class="avatar">
                    <span class="nav-link-text ms-2 ps-1">Brooklyn Alice</span>
                </a>
                <div class="collapse" id="ProfileNav" style="">
                    <ul class="nav ">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="profile/overview.html">
                                <span class="sidenav-mini-icon"> MP </span>
                                <span class="sidenav-normal  ms-3  ps-1"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="account/settings.html">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal  ms-3  ps-1"> Settings </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="../authentication/signin/basic.html">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal  ms-3  ps-1"> Logout </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <hr class="horizontal light mt-0">
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link text-white "
                   aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round opacity-10">dashboard</i>
                    <span class="nav-link-text me-1">Dashboards</span>
                </a>
                <div class="collapse " id="dashboardsExamples">
                    <ul class="nav  pe-0 ">
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="../dashboards/analytics-1.html">
                                <span class="sidenav-mini-icon"> A </span>
                                <span class="sidenav-normal  me-3  ps-1"> Analytics </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="../dashboards/discover.html">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal  me-3  ps-1"> Discover </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="../dashboards/sales.html">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal  me-3  ps-1"> Sales </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="../dashboards/automotive.html">
                                <span class="sidenav-mini-icon"> A </span>
                                <span class="sidenav-normal  me-3  ps-1"> Automotive </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="../dashboards/smart-home.html">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal  me-3  ps-1"> Smart Home </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 me-4 text-uppercase text-xs font-weight-bolder text-white">PAGES</h6>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link text-white active"
                   aria-controls="pagesExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">image</i>
                    <span class="nav-link-text me-1">Pages</span>
                </a>
                <div class="collapse  show " id="pagesExamples">
                    <ul class="nav  pe-0 ">
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                               href="#profileExample">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal  me-3  ps-1"> Profile <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="profileExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="profile/overview.html">
                                            <span class="sidenav-mini-icon"> P </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Profile Overview </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="profile/projects.html">
                                            <span class="sidenav-mini-icon"> A </span>
                                            <span class="sidenav-normal  me-3  ps-1"> All Projects </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="profile/messages.html">
                                            <span class="sidenav-mini-icon"> M </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Messages </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                               href="#usersExample">
                                <span class="sidenav-mini-icon"> U </span>
                                <span class="sidenav-normal  me-3  ps-1"> Users <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="usersExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="users/reports.html">
                                            <span class="sidenav-mini-icon"> R </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Reports </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="users/new-user.html">
                                            <span class="sidenav-mini-icon"> N </span>
                                            <span class="sidenav-normal  me-3  ps-1"> New User </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                               href="#accountExample">
                                <span class="sidenav-mini-icon"> A </span>
                                <span class="sidenav-normal  me-3  ps-1"> Account <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="accountExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="account/settings.html">
                                            <span class="sidenav-mini-icon"> S </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Settings </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="account/billing.html">
                                            <span class="sidenav-mini-icon"> B </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Billing </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="account/invoice.html">
                                            <span class="sidenav-mini-icon"> I </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Invoice </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="account/security.html">
                                            <span class="sidenav-mini-icon"> S </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Security </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                               href="#projectsExample">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal  me-3  ps-1"> Projects <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="projectsExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="projects/general.html">
                                            <span class="sidenav-mini-icon"> G </span>
                                            <span class="sidenav-normal  me-3  ps-1"> General </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="projects/timeline.html">
                                            <span class="sidenav-mini-icon"> T </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Timeline </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="projects/new-project.html">
                                            <span class="sidenav-mini-icon"> N </span>
                                            <span class="sidenav-normal  me-3  ps-1"> New Project </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                               href="#vrExamples">
                                <span class="sidenav-mini-icon"> V </span>
                                <span class="sidenav-normal  me-3  ps-1"> Virtual Reality <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="vrExamples">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="vr/vr-default.html">
                                            <span class="sidenav-mini-icon"> V </span>
                                            <span class="sidenav-normal  me-3  ps-1"> VR Default </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="vr/vr-info.html">
                                            <span class="sidenav-mini-icon"> V </span>
                                            <span class="sidenav-normal  me-3  ps-1"> VR Info </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="pricing-page.html">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal  me-3  ps-1"> Pricing Page </span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-white active" href="rtl-page.html">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal  me-3  ps-1"> RTL </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="widgets.html">
                                <span class="sidenav-mini-icon"> W </span>
                                <span class="sidenav-normal  me-3  ps-1"> Widgets </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="charts.html">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal  me-3  ps-1"> Charts </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="sweet-alerts.html">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal  me-3  ps-1"> Sweet Alerts </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="notifications.html">
                                <span class="sidenav-mini-icon"> N </span>
                                <span class="sidenav-normal  me-3  ps-1"> Notifications </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link text-white "
                   aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">apps</i>
                    <span class="nav-link-text me-1">Applications</span>
                </a>
                <div class="collapse " id="applicationsExamples">
                    <ul class="nav  pe-0 ">
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="../applications/crm.html">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal  me-3  ps-1"> CRM </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="../applications/kanban.html">
                                <span class="sidenav-mini-icon"> K </span>
                                <span class="sidenav-normal  me-3  ps-1"> Kanban </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="../applications/wizard.html">
                                <span class="sidenav-mini-icon"> W </span>
                                <span class="sidenav-normal  me-3  ps-1"> Wizard </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="../applications/datatables.html">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal  me-3  ps-1"> DataTables </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="../applications/calendar.html">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal  me-3  ps-1"> Calendar </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="../applications/stats.html">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal  me-3  ps-1"> Stats </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="../applications/validation.html">
                                <span class="sidenav-mini-icon"> V </span>
                                <span class="sidenav-normal  me-3  ps-1"> Validation </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link text-white "
                   aria-controls="ecommerceExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">shopping_basket</i>
                    <span class="nav-link-text me-1">Ecommerce</span>
                </a>
                <div class="collapse " id="ecommerceExamples">
                    <ul class="nav  pe-0 ">
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                               href="#productsExample">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal  me-3  ps-1"> Products <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="productsExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../ecommerce/products/new-product.html">
                                            <span class="sidenav-mini-icon"> N </span>
                                            <span class="sidenav-normal  me-3  ps-1"> New Product </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../ecommerce/products/edit-product.html">
                                            <span class="sidenav-mini-icon"> E </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Edit Product </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../ecommerce/products/product-page.html">
                                            <span class="sidenav-mini-icon"> P </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Product Page </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../ecommerce/products/products-list.html">
                                            <span class="sidenav-mini-icon"> P </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Products List </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                               href="#ordersExample">
                                <span class="sidenav-mini-icon"> O </span>
                                <span class="sidenav-normal  me-3  ps-1"> Orders <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="ordersExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../ecommerce/orders/list.html">
                                            <span class="sidenav-mini-icon"> O </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Order List </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../ecommerce/orders/details.html">
                                            <span class="sidenav-mini-icon"> O </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Order Details </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="../ecommerce/referral.html">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal  me-3  ps-1"> Referral </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#authExamples" class="nav-link text-white "
                   aria-controls="authExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">content_paste</i>
                    <span class="nav-link-text me-1">Authentication</span>
                </a>
                <div class="collapse " id="authExamples">
                    <ul class="nav  pe-0 ">
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                               href="#signinExample">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal  me-3  ps-1"> Sign In <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="signinExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../authentication/signin/basic.html">
                                            <span class="sidenav-mini-icon"> B </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../authentication/signin/cover.html">
                                            <span class="sidenav-mini-icon"> C </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white "
                                           href="../authentication/signin/illustration.html">
                                            <span class="sidenav-mini-icon"> I </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                               href="#signupExample">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal  me-3  ps-1"> Sign Up <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="signupExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../authentication/signup/basic.html">
                                            <span class="sidenav-mini-icon"> B </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../authentication/signup/cover.html">
                                            <span class="sidenav-mini-icon"> C </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white "
                                           href="../authentication/signup/illustration.html">
                                            <span class="sidenav-mini-icon"> I </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                               href="#resetExample">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal  me-3  ps-1"> Reset Password <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="resetExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../authentication/reset/basic.html">
                                            <span class="sidenav-mini-icon"> B </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../authentication/reset/cover.html">
                                            <span class="sidenav-mini-icon"> C </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white "
                                           href="../authentication/reset/illustration.html">
                                            <span class="sidenav-mini-icon"> I </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                               href="#lockExample">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal  me-3  ps-1"> Lock <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="lockExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../authentication/lock/basic.html">
                                            <span class="sidenav-mini-icon"> B </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../authentication/lock/cover.html">
                                            <span class="sidenav-mini-icon"> C </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../authentication/lock/illustration.html">
                                            <span class="sidenav-mini-icon"> I </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                               href="#StepExample">
                                <span class="sidenav-mini-icon"> 2 </span>
                                <span class="sidenav-normal  me-3  ps-1"> 2-Step Verification <b
                                        class="caret"></b></span>
                            </a>
                            <div class="collapse " id="StepExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white "
                                           href="../authentication/verification/basic.html">
                                            <span class="sidenav-mini-icon"> B </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white "
                                           href="../authentication/verification/cover.html">
                                            <span class="sidenav-mini-icon"> C </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white "
                                           href="../authentication/verification/illustration.html">
                                            <span class="sidenav-mini-icon"> I </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                               href="#errorExample">
                                <span class="sidenav-mini-icon"> E </span>
                                <span class="sidenav-normal  me-3  ps-1"> Error <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="errorExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../authentication/error/404.html">
                                            <span class="sidenav-mini-icon"> E </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Error 404 </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../authentication/error/500.html">
                                            <span class="sidenav-mini-icon"> E </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Error 500 </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <hr class="horizontal light">
                <h6 class="ps-4 me-4 text-uppercase text-xs font-weight-bolder text-white">DOCS</h6>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#basicExamples" class="nav-link text-white "
                   aria-controls="basicExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">upcoming</i>
                    <span class="nav-link-text me-1">Basic</span>
                </a>
                <div class="collapse " id="basicExamples">
                    <ul class="nav  pe-0 ">
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                               href="#gettingStartedExample">
                                <span class="sidenav-mini-icon"> G </span>
                                <span class="sidenav-normal  me-3  ps-1"> Getting Started <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="gettingStartedExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white "
                                           href="https://www.creative-tim.com/learning-lab/bootstrap/quick-start/material-dashboard"
                                           target="_blank">
                                            <span class="sidenav-mini-icon"> Q </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Quick Start </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white "
                                           href="https://www.creative-tim.com/learning-lab/bootstrap/license/material-dashboard"
                                           target="_blank">
                                            <span class="sidenav-mini-icon"> L </span>
                                            <span class="sidenav-normal  me-3  ps-1"> License </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white "
                                           href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard"
                                           target="_blank">
                                            <span class="sidenav-mini-icon"> C </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Contents </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white "
                                           href="https://www.creative-tim.com/learning-lab/bootstrap/build-tools/material-dashboard"
                                           target="_blank">
                                            <span class="sidenav-mini-icon"> B </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Build Tools </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                               href="#foundationExample">
                                <span class="sidenav-mini-icon"> F </span>
                                <span class="sidenav-normal  me-3  ps-1"> Foundation <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="foundationExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white "
                                           href="https://www.creative-tim.com/learning-lab/bootstrap/colors/material-dashboard"
                                           target="_blank">
                                            <span class="sidenav-mini-icon"> C </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Colors </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white "
                                           href="https://www.creative-tim.com/learning-lab/bootstrap/grid/material-dashboard"
                                           target="_blank">
                                            <span class="sidenav-mini-icon"> G </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Grid </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white "
                                           href="https://www.creative-tim.com/learning-lab/bootstrap/typography/material-dashboard"
                                           target="_blank">
                                            <span class="sidenav-mini-icon"> T </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Typography </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white "
                                           href="https://www.creative-tim.com/learning-lab/bootstrap/icons/material-dashboard"
                                           target="_blank">
                                            <span class="sidenav-mini-icon"> I </span>
                                            <span class="sidenav-normal  me-3  ps-1"> Icons </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#componentsExamples" class="nav-link text-white "
                   aria-controls="componentsExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">view_in_ar</i>
                    <span class="nav-link-text me-1">Components</span>
                </a>
                <div class="collapse " id="componentsExamples">
                    <ul class="nav  pe-0 ">
                        <li class="nav-item ">
                            <a class="nav-link text-white "
                               href="https://www.creative-tim.com/learning-lab/bootstrap/alerts/material-dashboard"
                               target="_blank">
                                <span class="sidenav-mini-icon"> A </span>
                                <span class="sidenav-normal  me-3  ps-1"> Alerts </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white "
                               href="https://www.creative-tim.com/learning-lab/bootstrap/badge/material-dashboard"
                               target="_blank">
                                <span class="sidenav-mini-icon"> B </span>
                                <span class="sidenav-normal  me-3  ps-1"> Badge </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white "
                               href="https://www.creative-tim.com/learning-lab/bootstrap/buttons/material-dashboard"
                               target="_blank">
                                <span class="sidenav-mini-icon"> B </span>
                                <span class="sidenav-normal  me-3  ps-1"> Buttons </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white "
                               href="https://www.creative-tim.com/learning-lab/bootstrap/cards/material-dashboard"
                               target="_blank">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal  me-3  ps-1"> Card </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white "
                               href="https://www.creative-tim.com/learning-lab/bootstrap/carousel/material-dashboard"
                               target="_blank">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal  me-3  ps-1"> Carousel </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white "
                               href="https://www.creative-tim.com/learning-lab/bootstrap/collapse/material-dashboard"
                               target="_blank">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal  me-3  ps-1"> Collapse </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white "
                               href="https://www.creative-tim.com/learning-lab/bootstrap/dropdowns/material-dashboard"
                               target="_blank">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal  me-3  ps-1"> Dropdowns </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white "
                               href="https://www.creative-tim.com/learning-lab/bootstrap/forms/material-dashboard"
                               target="_blank">
                                <span class="sidenav-mini-icon"> F </span>
                                <span class="sidenav-normal  me-3  ps-1"> Forms </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white "
                               href="https://www.creative-tim.com/learning-lab/bootstrap/modal/material-dashboard"
                               target="_blank">
                                <span class="sidenav-mini-icon"> M </span>
                                <span class="sidenav-normal  me-3  ps-1"> Modal </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white "
                               href="https://www.creative-tim.com/learning-lab/bootstrap/navs/material-dashboard"
                               target="_blank">
                                <span class="sidenav-mini-icon"> N </span>
                                <span class="sidenav-normal  me-3  ps-1"> Navs </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white "
                               href="https://www.creative-tim.com/learning-lab/bootstrap/navbar/material-dashboard"
                               target="_blank">
                                <span class="sidenav-mini-icon"> N </span>
                                <span class="sidenav-normal  me-3  ps-1"> Navbar </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white "
                               href="https://www.creative-tim.com/learning-lab/bootstrap/pagination/material-dashboard"
                               target="_blank">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal  me-3  ps-1"> Pagination </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white "
                               href="https://www.creative-tim.com/learning-lab/bootstrap/popovers/material-dashboard"
                               target="_blank">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal  me-3  ps-1"> Popovers </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white "
                               href="https://www.creative-tim.com/learning-lab/bootstrap/progress/material-dashboard"
                               target="_blank">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal  me-3  ps-1"> Progress </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white "
                               href="https://www.creative-tim.com/learning-lab/bootstrap/spinners/material-dashboard"
                               target="_blank">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal  me-3  ps-1"> Spinners </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white "
                               href="https://www.creative-tim.com/learning-lab/bootstrap/tables/material-dashboard"
                               target="_blank">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal  me-3  ps-1"> Tables </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white "
                               href="https://www.creative-tim.com/learning-lab/bootstrap/tooltips/material-dashboard"
                               target="_blank">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal  me-3  ps-1"> Tooltips </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                   href="https://github.com/creativetimofficial/ct-material-dashboard-pro/blob/master/CHANGELOG.md"
                   target="_blank">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">receipt_long</i>
                    <span class="nav-link-text me-1">Changelog</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<div class="main-content position-relative max-height-vh-100 h-100">
    <div class="container-fluid px-2 px-md-4">
        <div class="page-header min-height-300 border-radius-xl mt-4">
            <span class="mask  bg-gradient-primary  opacity-6"></span>
        </div>
        <div class="card card-body mx-3 mx-md-4 mt-n6">
            <div class="row gx-4 mb-2">
                <div class="col-auto my-auto h-100">
                    <h3 class="mb-1">
                        Ali Kazemini
                    </h3>
                    <p class="mb-0 font-weight-normal text-sm">
                        کاربری تایید شده
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="row mt-3">
                    <div class="col-12 col-md-12 col-xl-12 position-relative">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <h4 class="mb-0">ویرایش اطلاعات کاربری</h4>
                            </div>
                        </div>
                        <hr class="vertical dark">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer py-4  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    ایجاد شده توسط علی کاظمینی
                </div>
            </div>
        </div>
    </footer>
</div>


<script
    src="{{url('assets/js/core/popper.min.js')}}"></script>
<script
    src="{{url('assets/js/core/bootstrap.min.js')}}"></script>
<script
    src="{{url('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script
    src="{{url('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>

<script
    src="{{url('assets/js/plugins/dragula/dragula.min.js')}}"></script>
<script
    src="{{url('assets/js/plugins/jkanban/jkanban.js')}}"></script>
<script>
    const win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        const options = {
            damping: '0.5'
        };
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script async="" defer="" src="{{url('assets/js/buttons.js')}}"></script>

<script
    src="{{url('assets/js/material-dashboard.min.js?v=3.0.6')}}"></script>
</body>
</html>
