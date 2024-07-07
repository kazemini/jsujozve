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

    <link rel="stylesheet" href="{{url('css/Vazirmatn-FD-font-face.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/styles.css')}}">

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
<body class="rtl g-sidenav-show bg-gray-200" style="font-family: Vazirmatn FD,sans-serif">
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
                <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav"
                   role="button" aria-expanded="false">
                    <span class="nav-link-text ms-2 ps-1">{{auth()->user()->name}}</span>
                </a>
                <div class="collapse show" id="ProfileNav" style="">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('profile')}}">
                                <i class="fa-duotone fa-user-hair"></i>
                                <span class="sidenav-normal ms-2 ps-1"> حساب کاربری </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('profile.logout')}}">
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
                <a class="nav-link text-white" href="{{route('document.index')}}">
                    <i class="sidenav-mini-icon fa-duotone fa-file-circle-plus"></i>
                    <span class="sidenav-normal me-1">ایجاد جزوه جدید<b class="caret"></b></span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('document.management')}}">
                    <i class="fa-duotone fa-chart-network"></i>
                    <span class="sidenav-normal me-1"> مدیریت جزوه ها <b class="caret"></b></span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('bookmarks')}}" class="nav-link text-white">
                    <i class="fa-duotone fa-thumbs-up"></i>
                    <span class="nav-link-text me-1">جزوه‌های پسندیده شده</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('document.explore')}}" class="nav-link text-white">
                    <i class="fa-duotone fa-file-magnifying-glass"></i>
                    <span class="nav-link-text me-1">کاوش در جزوه‌ها</span>
                </a>
            </li>

            <li class="nav-item">
                <hr class="horizontal light">
                <h6 class="ps-4 me-4 text-uppercase text-lg font-weight-bolder text-white">انجمن</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('forum.create')}}">
                    <i class="fa-duotone fa-people-group"></i>
                    <span class="nav-link-text me-1">ایجاد انجمن‌ جدید</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('forum.management')}}">
                    <i class="fa-duotone fa-people-roof"></i>
                    <span class="nav-link-text me-1">مدیریت انجمن‌ها</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('forum.subscribed')}}">
                    <i class="fa-duotone fa-people-pulling"></i>
                    <span class="nav-link-text me-1">انجمن‌های دنبال شده</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('forum.explore')}}">
                    <i class="fa-duotone fa-telescope"></i>
                    <span class="nav-link-text me-1">کاوش در انجمن‌ها</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('post.explore')}}">
                    <i class="fa-duotone fa-comments"></i>
                    <span class="nav-link-text me-1">کاوش در پست‌ها</span>
                </a>
            </li>
            <li class="nav-item">
                <hr class="horizontal light">
                <a class="nav-link"
                   href="https://ifteam.ir"
                   target="_blank">
                    <i class="fa-duotone fa-gingerbread-man"></i>
                    <span class="nav-link-text me-1">طراحی توسط علی کاظمینی</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<div class="main-content position-relative max-height-vh-100 h-100">
    @yield('content')
    <footer class="footer py-4 text-center">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-12 mb-lg-0 mb-4">
                   حق کپی رایت برای درس مباحث ویژه 2 محفوظ می باشد ;)
                </div>
            </div>
        </div>
    </footer>
</div>
{{--<div class="fixed-plugin">--}}
{{--    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">--}}
{{--        <i class="material-icons py-2">settings</i>--}}
{{--    </a>--}}
{{--    <div class="card shadow-lg">--}}
{{--        <div class="card-header pb-0 pt-3">--}}
{{--            <div class="float-end">--}}
{{--                <h5 class="mt-3 mb-0">Material UI Configurator</h5>--}}
{{--                <p>See our dashboard options.</p>--}}
{{--            </div>--}}
{{--            <div class="float-start mt-4">--}}
{{--                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">--}}
{{--                    <i class="material-icons">clear</i>--}}
{{--                </button>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        <hr class="horizontal dark my-1">--}}
{{--        <div class="card-body pt-sm-3 pt-0">--}}

{{--            <div>--}}
{{--                <h6 class="mb-0">Sidebar Colors</h6>--}}
{{--            </div>--}}
{{--            <a href="javascript:void(0)" class="switch-trigger background-color">--}}
{{--                <div class="badge-colors my-2 text-end">--}}
{{--                    <span class="badge filter bg-gradient-primary active" data-color="primary"--}}
{{--                          onclick="sidebarColor(this)"></span>--}}
{{--                    <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>--}}
{{--                    <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>--}}
{{--                    <span class="badge filter bg-gradient-success" data-color="success"--}}
{{--                          onclick="sidebarColor(this)"></span>--}}
{{--                    <span class="badge filter bg-gradient-warning" data-color="warning"--}}
{{--                          onclick="sidebarColor(this)"></span>--}}
{{--                    <span class="badge filter bg-gradient-danger" data-color="danger"--}}
{{--                          onclick="sidebarColor(this)"></span>--}}
{{--                </div>--}}
{{--            </a>--}}

{{--            <div class="mt-3">--}}
{{--                <h6 class="mb-0">Sidenav Type</h6>--}}
{{--                <p class="text-sm">Choose between 2 different sidenav types.</p>--}}
{{--            </div>--}}
{{--            <div class="d-flex">--}}
{{--                <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"--}}
{{--                        onclick="sidebarType(this)">Dark--}}
{{--                </button>--}}
{{--                <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"--}}
{{--                        onclick="sidebarType(this)">Transparent--}}
{{--                </button>--}}
{{--                <button class="btn bg-gradient-dark px-3 mb-2 me-2" data-class="bg-white" onclick="sidebarType(this)">--}}
{{--                    White--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>--}}

{{--            <div class="mt-3 d-flex">--}}
{{--                <h6 class="mb-0">Navbar Fixed</h6>--}}
{{--                <div class="form-check form-switch me-auto my-auto">--}}
{{--                    <input class="form-check-input mt-1 float-end me-auto" type="checkbox" id="navbarFixed"--}}
{{--                           onclick="navbarFixed(this)">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <hr class="horizontal dark my-3">--}}
{{--            <div class="mt-2 d-flex">--}}
{{--                <h6 class="mb-0">Sidenav Mini</h6>--}}
{{--                <div class="form-check form-switch me-auto my-auto">--}}
{{--                    <input class="form-check-input mt-1 float-end me-auto" type="checkbox" id="navbarMinimize"--}}
{{--                           onclick="navbarMinimize(this)">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <hr class="horizontal dark my-3">--}}
{{--            <div class="mt-2 d-flex">--}}
{{--                <h6 class="mb-0">Light / Dark</h6>--}}
{{--                <div class="form-check form-switch me-auto my-auto">--}}
{{--                    <input class="form-check-input mt-1 float-end me-auto" type="checkbox" id="dark-version"--}}
{{--                           onclick="darkMode(this)">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <hr class="horizontal dark my-sm-4">--}}
{{--            <a class="btn bg-gradient-primary w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Buy--}}
{{--                now</a>--}}
{{--            <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard">Free--}}
{{--                demo</a>--}}
{{--            <a class="btn btn-outline-dark w-100"--}}
{{--               href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View--}}
{{--                documentation</a>--}}
{{--            <div class="w-100 text-center">--}}
{{--                <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard"--}}
{{--                   data-icon="octicon-star" data-size="large" data-show-count="true"--}}
{{--                   aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>--}}
{{--                <h6 class="mt-3">Thank you for sharing!</h6>--}}
{{--                <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20PRO%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard-pro"--}}
{{--                   class="btn btn-dark mb-0 me-2" target="_blank">--}}
{{--                    <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet--}}
{{--                </a>--}}
{{--                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard-pro"--}}
{{--                   class="btn btn-dark mb-0 me-2" target="_blank">--}}
{{--                    <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}



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

<script>
    document.querySelector('#sidenav-collapse-main a[href="{{ request()->url() }}"]').parentElement.parentElement.parentElement.parentElement.firstElementChild.classList.add('active');
    document.querySelector('#sidenav-collapse-main a[href="{{ request()->url() }}"]').classList.add('active');
</script>
</body>
</html>
