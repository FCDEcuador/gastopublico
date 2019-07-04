	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//code.jquery.com/jquery-3.3.1.min.js"  crossorigin="anonymous"></script>    
    <script src="{{ asset('public/frontend/js/popper.min.js') }}"  crossorigin="anonymous"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"  crossorigin="anonymous"></script>
    <script src="{{ asset('public/frontend/js/Chart.min.js') }}"  crossorigin="anonymous"></script>
    <script defer src="{{ asset('public/frontend/js/all.js') }}"></script>
    <script src="{{ asset('public/frontend/js/custom.js') }}"  crossorigin="anonymous"></script>

    @yield('custom-js')

    {!! $oConfiguration->another_mark_bottom_script !!}

    {!! $oConfiguration->add_this_script !!}

    {!! $oConfiguration->disqus_script !!}