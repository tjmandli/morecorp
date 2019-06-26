<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('assets/build/mcorp.min.css') }}" rel="stylesheet">

</head>
<body class="dashboard">

    @include('layouts.partials.dashboard-nav')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3" id="sidebar">
                <h4>Products</h4>
                <ul class="list-unstyled">
                    <li><a href="/dashboard/products/create">Add New Product</a></li>
                    <li><a href="/dashboard/products">List Products</a></li>
                </ul>
            </div>
            <div class="col-sm-9" id="main-content">
                @yield('content')         
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/build/mcorp.min.js') }}"></script>
</body>
</html>
