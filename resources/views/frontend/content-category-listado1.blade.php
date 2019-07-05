@extends('frontend.layouts.frontend-layout')

@section('title')
	{!! $oContentCategory->title !!}
@endsection

@section('custom-css')	
    {!! Html::style('public/backend/assets/plugins/bootstrap-sweetalert/sweetalert.css') !!}
    {!! $oContentCategory->extra_headers !!}
@endsection


@section('main-content')
	
@endsection


@section('custom-js')
	{!! Html::script('public/backend/assets/plugins/bootstrap-sweetalert/sweetalert.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/js/ui-sweetalert.min.js', ['type' => 'text/javascript']) !!}
@endsection