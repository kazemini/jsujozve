<!doctype html>
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
            <span class="me-1 font-weight-bold text-white">{{config('app.name')}}</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse px-0 w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-2 mt-0">
                <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white active" aria-controls="ProfileNav"
                   role="button" aria-expanded="false">
                    <img src="../../assets/img/team-3.jpg" class="avatar">
                    <span class="nav-link-text ms-2 ps-1">{{auth()->user()->name}}</span>
                </a>
                <div class="collapse show" id="ProfileNav" style="">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="profile/overview.html">
                                <i class="fa-duotone fa-user-hair"></i>
                                <span class="sidenav-normal  ms-3  ps-1"> حساب کاربری </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="account/settings.html">
                                <i class="fa-duotone fa-door-open"></i>
                                <span class="sidenav-normal  ms-3  ps-1"> خروج از سیستم </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <hr class="horizontal light mt-0">
            <li class="nav-item">
                <h6 class="ps-4 me-4 text-uppercase text-lg font-weight-bolder text-white">جزوه‌</h6>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link text-white"
                   aria-controls="pagesExamples" role="button" aria-expanded="false">
                    <i class="fa-duotone fa-folder-tree {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}"></i>
                    <span class="nav-link-text me-1">مدیریت جزوه‌ها</span>
                </a>
                <div class="collapse " id="pagesExamples">
                    <ul class="nav  pe-0 ">
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                               href="#profileExample">
                                <span class="sidenav-mini-icon"> J </span>
                                <span class="sidenav-normal  me-3  ps-1"> جزوه‌های من <b class="caret"></b></span>
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
                    <span class="nav-link-text me-1">جزوه‌های پسند شده</span>
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
                    <span class="nav-link-text me-1">تاریخچه ویرایش</span>
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
                <hr class="horizontal light">
                <h6 class="ps-4 me-4 text-uppercase text-lg font-weight-bolder text-white">انجمن</h6>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#basicExamples" class="nav-link text-white "
                   aria-controls="basicExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">upcoming</i>
                    <span class="nav-link-text me-1">مدیریت انجمن‌ها</span>
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
                    <span class="nav-link-text me-1">انجمن‌های دنبال شده</span>
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
                    <span class="nav-link-text me-1">کاوش در پست‌ها</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<div class="main-content position-relative max-height-vh-100 h-100">
    @yield('content')
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
<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3">
            <div class="float-end">
                <h5 class="mt-3 mb-0">Material UI Configurator</h5>
                <p>See our dashboard options.</p>
            </div>
            <div class="float-start mt-4">
                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                    <i class="material-icons">clear</i>
                </button>
            </div>

        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0">

            <div>
                <h6 class="mb-0">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)" class="switch-trigger background-color">
                <div class="badge-colors my-2 text-end">
                    <span class="badge filter bg-gradient-primary active" data-color="primary"
                          onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-success" data-color="success"
                          onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-warning" data-color="warning"
                          onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-danger" data-color="danger"
                          onclick="sidebarColor(this)"></span>
                </div>
            </a>

            <div class="mt-3">
                <h6 class="mb-0">Sidenav Type</h6>
                <p class="text-sm">Choose between 2 different sidenav types.</p>
            </div>
            <div class="d-flex">
                <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
                        onclick="sidebarType(this)">Dark
                </button>
                <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent
                </button>
                <button class="btn bg-gradient-dark px-3 mb-2 me-2" data-class="bg-white" onclick="sidebarType(this)">
                    White
                </button>
            </div>
            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>

            <div class="mt-3 d-flex">
                <h6 class="mb-0">Navbar Fixed</h6>
                <div class="form-check form-switch me-auto my-auto">
                    <input class="form-check-input mt-1 float-end me-auto" type="checkbox" id="navbarFixed"
                           onclick="navbarFixed(this)">
                </div>
            </div>
            <hr class="horizontal dark my-3">
            <div class="mt-2 d-flex">
                <h6 class="mb-0">Sidenav Mini</h6>
                <div class="form-check form-switch me-auto my-auto">
                    <input class="form-check-input mt-1 float-end me-auto" type="checkbox" id="navbarMinimize"
                           onclick="navbarMinimize(this)">
                </div>
            </div>
            <hr class="horizontal dark my-3">
            <div class="mt-2 d-flex">
                <h6 class="mb-0">Light / Dark</h6>
                <div class="form-check form-switch me-auto my-auto">
                    <input class="form-check-input mt-1 float-end me-auto" type="checkbox" id="dark-version"
                           onclick="darkMode(this)">
                </div>
            </div>
            <hr class="horizontal dark my-sm-4">
            <a class="btn bg-gradient-primary w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Buy
                now</a>
            <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard">Free
                demo</a>
            <a class="btn btn-outline-dark w-100"
               href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View
                documentation</a>
            <div class="w-100 text-center">
                <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard"
                   data-icon="octicon-star" data-size="large" data-show-count="true"
                   aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
                <h6 class="mt-3">Thank you for sharing!</h6>
                <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20PRO%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard-pro"
                   class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard-pro"
                   class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                </a>
            </div>
        </div>
    </div>
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
