<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">


    <link rel="stylesheet" href="/libs/css/style.css">
    <link rel="stylesheet" href="/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">
    <!--   <link rel="stylesheet" href="/vendor/datatables/css/buttons.bootstrap4.css">-->
     <link rel="stylesheet" href="{{URL::asset('js/lightgallery.css')}}">
    <link rel="stylesheet" href="{{URL::asset('js/style.css')}}">



</head>
<body>

    <div id="app">
            <router-view></router-view>
    </div>


</body>
<!-- 
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoVDtqy0CWpJpPZW792OAMUzYJz-uUHbU&callback=initMap"
    async
    defer
></script>
 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


<script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 
 <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
 
 <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
 


</html>
