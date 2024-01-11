<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <title>@yield('title',config('site.title'))</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    @vite([
    'resources/scss/app.scss',
     'resources/js/app.js'
     ])

</head>
<body data-bs-theme="dark" class="bg-body">
<div class="main-container" id="container">
<!--  BEGIN NAVBAR  -->
@include('layout._partials.header')
<!--  END NAVBAR  -->

    <div class="container-fluid">

        <sidebar class="sidebar">
            <h1>tester</h1>
        </sidebar>

    </div>
</div>

@include('sweetalert::alert')
</body>
</html>
