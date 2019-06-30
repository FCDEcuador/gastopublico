	
	{!! $oConfiguration->google_analytics_script !!}
	{!! $oConfiguration->another_mark_top_script !!}

	<!-- Required meta tags -->
	{!! Html::meta(null, null, ['charset' => 'utf-8']) !!}
	{!! Html::meta('viewport', 'width=device-width, initial-scale=1, shrink-to-fit=no') !!}

	{!! SEO::generate() !!}

	@yield('custom-css')