<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

        <!--====== LineAwesome ======-->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/line-awesome.min.css') }}">
    <!--====== select2 CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/select2.min.css') }}">
    <!--====== Nestable CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/nestable.css') }}">
    <!--====== Summernote CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/summernote-lite.min.css') }}">
    <!--====== datatable ======-->
    <link href="{{ asset('assets/admin/css/jquery.dataTables.min.css') }}" rel="stylesheet">

    <!--====== AppCSS ======-->
    @stack('css_asset')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/admin/css/app.min.css') }}"> --}}
    <!--====== ResponsiveCSS ======-->
    {{-- <link rel="stylesheet" href="{{ asset('assets/admin/css/responsive.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/admin/css/responsive.min.css') }}">
    @stack('css')

    <style>
          .user-info-panel .badge {
              font-size: 12px;
              line-height: 16px;
              font-weight: 500;
              padding: 5px 10px;
              margin-left: 20px;
          }
      </style>


</head>
