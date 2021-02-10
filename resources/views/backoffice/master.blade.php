<!DOCTYPE html>
<html lang="{!! str_replace('_', '-', app()->getLocale()) !!}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <meta name="routeName" content="{!! Route::currentRouteName() !!}">
    @section('meta')
    @show

    <title>{!! Config::get('company.name') !!} | @yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{!! url('storage/faviconAdmin.ico') !!}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

    @livewireStyles

    <script src="https://kit.fontawesome.com/447636fad2.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="d-flex" id="wrapper">

    <!-- Page Content -->
    <div id="page-content-wrapper">

        @section('content')
        @show

    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

    @livewireScripts
</body>
</html>
