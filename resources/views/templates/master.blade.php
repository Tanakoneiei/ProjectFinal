<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <link href="{{asset('css/iconfont.css')}}" rel="stylesheet" />
    <link href="{{asset('css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('css/core.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet" />

    <link href="{{asset('css/style.min.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{asset('css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/toastr.min.css')}}">
</head>

<body class="navbar-dark bg-light" style="background-image:url('/img/111583.jpg'); background-attachment: fixed; background-size: cover;"  data-base-url="/a">
<div class="main-wrapper" id="app">
    <div class="horizontal-menu">
        @include('templates.top2') 

    </div>
    
    <div class="page-wrapper">
        <div class="page-content">

            @yield('content')

        </div>
        <footer class="bg-white footer border-top">
            <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-3 small">
                <p class="text-muted mb-1 mb-md-0">ABC © {{now()->format('Y')}} <a href="/" target="_blank">{{config('app.name')}}</a>.</p>
                <p class="text-muted"> Thanakon <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
            </div>
        </footer>
    </div>
</div>

<script src="{{asset('js/core.js')}}"></script>
<script src="{{asset('js/feather.min.js')}}"></script>
<script src="{{asset('js/perfect-scrollbar.min.js')}}"></script>

<script src="{{asset('js/prism.js')}}"></script>
<script src="{{asset('js/clipboard.min.js')}}"></script>

<script src="{{asset('js/template.js')}}"></script>

<script type="text/javascript" charset="utf8" src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" charset="utf8" src="{{asset('js/jquery.form.js')}}"></script>
<script type="text/javascript" charset="utf8" src="{{asset('js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('js/toastr.min.js')}}"></script>
@yield('user-script')
</body>
</html>
