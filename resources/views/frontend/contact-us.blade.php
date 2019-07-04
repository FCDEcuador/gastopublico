@extends('frontend.layouts.frontend-layout')

@section('title')
	Contactenos
@endsection

@section('custom-css')
	{!! Html::style('public/backend/assets/plugins/ladda/ladda-themeless.min.css') !!}
    {!! Html::style('public/backend/assets/plugins/bootstrap-sweetalert/sweetalert.css') !!}
@endsection




@section('main-content')	
@endsection




@section('custom-js')

	{!! Html::script('public/backend/assets/plugins/jquery-validation/js/jquery.validate.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/plugins/jquery-validation/js/additional-methods.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/plugins/bootstrap-sweetalert/sweetalert.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/js/ui-sweetalert.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/plugins/ladda/spin.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/plugins/ladda/ladda.min.js', ['type' => 'text/javascript']) !!}

    {!! Html::script('public/frontend/js/form-validate/form-validation-contact-form.min.js', ['type' => 'text/javascript']) !!}

    <script type="text/javascript">
    	$(document).ready(function(){
            @if(session()->exists('successMsg'))
                showAlert('Gasto Público', '{!! session('successMsg') !!}', 'success');
            @endif

            @if(session()->exists('warningMsg'))
                showAlert('Gasto Público', '{!! session('warningMsg') !!}', 'warning');
            @endif

            @if(session()->exists('errorMsg'))
                showAlert('Gasto Público', '{!! session('errorMsg') !!}', 'error');
            @endif
        });
    </script>

@endsection