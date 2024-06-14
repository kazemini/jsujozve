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

    <link rel="stylesheet" href="{{url('css/Vazirmatn-FD-font-face.css')}}" type="text/css">

    <link rel="stylesheet" href="{{url('css/styles.css')}}">

    <script src="{{url('assets/js/42d5adcbca.js')}}" crossorigin="anonymous"></script>

    <link href="{{url('assets/icon-1?family=Material+Icons+Round')}}"
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
<body class="rtl" style="font-family: Vazirmatn FD,sans-serif">
    <div id="app">
        <main class="main-content  mt-0">
            @yield('content')
        </main>
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
