	{!! $oConfiguration->google_analytics_script !!}
	{!! $oConfiguration->another_mark_top_script !!}

	{!! Html::meta(null, null, ['charset' => 'utf-8']) !!}
	{!! Html::meta('viewport', 'width=device-width, initial-scale=1, shrink-to-fit=no') !!}

	{!! SEO::generate() !!}

	<!-- Required meta tags -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('public/frontend/images/apple-icon-57x57.png') }}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('public/frontend/images/apple-icon-60x60.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('public/frontend/images/apple-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/frontend/images/apple-icon-76x76.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('public/frontend/images/apple-icon-114x114.png') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('public/frontend/images/apple-icon-120x120.png') }}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('public/frontend/images/apple-icon-144x144.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('public/frontend/images/apple-icon-152x152.png') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/frontend/images/apple-icon-180x180.png') }}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('public/frontend/images/android-icon-192x192.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/frontend/images/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('public/frontend/images/favicon-96x96.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/frontend/images/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('public/frontend/images/manifest.json') }}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{{ asset('public/frontend/images/ms-icon-144x144.png') }}">
	<meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}"  crossorigin="anonymous">
    <!-- Font-awesome CSS -->
    <link href="{{ asset('public/frontend/css/all.css') }}" rel="stylesheet"> <!--load all styles -->

	

    <link rel="stylesheet" href="{{ asset('public/frontend/css/custom.css') }}" >

    <script src="{{ asset('public/frontend/js/jquery-3.3.1.slim.min.js') }}"  crossorigin="anonymous"></script>
    <script src="{{ asset('public/frontend/js/Chart.min.js') }}"  crossorigin="anonymous"></script>
    <script src="{{ asset('public/frontend/js/amcharts.js') }}"  crossorigin="anonymous"></script>
    <script src="{{ asset('public/frontend/js/serial.js') }}"  crossorigin="anonymous"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools --> 
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c6df5f8f2935ace"></script>

	@yield('custom-css')