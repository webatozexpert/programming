<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Averfresh | Home</title>
    <!--    Font Awesome Stylesheet-->
    <link rel="stylesheet" href="{{asset('/')}}/admin/{{asset('/')}}/admin/assets/fonts/fa/css/all.min.css">
    <!--    Animate CSS-->
    <link rel="stylesheet" href="{{asset('/')}}/admin/assets/css/animate.css">
    <!--    Owl Carosel Stylesheets-->
    <link rel="stylesheet" href="{{asset('/')}}/admin/assets/plugins/owl-carosel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}/admin/assets/plugins/owl-carosel/css/owl.theme.default.css">
    <!--    Magnetic Popup-->
    <link rel="stylesheet" href="{{asset('/')}}/admin/assets/plugins/magnific-popup/css/magnific-popup.css">
    <!--    Bootstrap-4.3 Stylesheet-->
    <link rel="stylesheet" href="{{asset('/')}}/admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}/admin/assets/css/sub-dropdown.css">
    <!--    Data Table CSS-->
    <link rel="stylesheet" href="{{asset('/')}}/admin/assets/plugins/data-table/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('/')}}/admin/assets/plugins/data-table/css/fixedHeader.bootstrap4.min.css">
    <!--    Theme Stylesheet-->
    <link rel="stylesheet" href="{{asset('/')}}/admin/assets/css/style.css">

    <!--    jQuery-->
    <!-- <script src="{{asset('/')}}/admin/assets/js/jquery-3.3.1.slim.min.js"></script> -->
      <script src="{{asset('/')}}/admin/assets/js/jquery-3.4.1.js"></script>
    <!--    Favicon-->
    <link rel="shortcut icon" href="{{asset('/')}}/admin/assets/images/favicon.png" type="image/x-icon">
</head>
<body>
<!--Header Start-->
<section>
    @if(isset($header))
        <div class="col-sm-12 text-center header pb-1">
            <h1 class="font-weight-bold p-1 m-0">{{ $header->title_name }}</h1>
            <h5 class="menu-bg p-2 pl-3 pr-3 mb-1">{{ $header->sub_title }} </h5>
            <p class="font-weight-bold mb-0">{{ $header->address }}</p>
            <p class="font-weight-bold mb-0">Mobile: {{ $header->mobile }}</p>
        </div>
        @else
        <div class="col-sm-12 text-center header pb-1">
            <h1 class="font-weight-bold p-1 m-0">Aver Fresh Limited</h1>
            <h5 class="menu-bg p-2 pl-3 pr-3 mb-1">Self-reliant a company </h5>
            <p class="font-weight-bold mb-0">Darayil Bazar Road Gabtoli Bugura</p>
            <p class="font-weight-bold mb-0">Mobile: +8801913-848150, +8801312-848150
            </p>
        </div>
        @endif

</section>
<!--Header End-->

<!--User Avatar Start-->
<img class="avatar" src="@if(Auth::user()->avatar){{asset('/'). '/'.$user->avatar}}@else {{asset('/')}}/admin/assets/images/avatar.png @endif" alt="Avatar">
<!--User Avatar Start-->


@include('admin.includes.menu')