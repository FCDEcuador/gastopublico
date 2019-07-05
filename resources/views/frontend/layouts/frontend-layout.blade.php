<!DOCTYPE html>
<html>

<head>
	@include('frontend.includes.head')	
</head>

<body>

	@include('frontend.includes.top-menu')


	<div id="mainPanel">
		@yield('main-content')
	</div>

	<!-- END  SLIDER HEADER REPEAT ALL SITE -->

	<!-- BEGIN FOOOTER -->

		@include('frontend.includes.footer')

	<!-- END FOOTER -->

	<div id="scriptsDiv">
		@include('frontend.includes.scripts')
	</div>

</body>
</html>