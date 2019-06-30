@extends('backend.layouts.backend-layout')

@section('custom-css')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    {!! Html::style('public/backend/assets/css/pages/ui-bootstrap-page.css') !!}
    <!-- END PAGE LEVEL PLUGINS -->
    {!! Html::style('public/backend/assets/plugins/wizard/steps.css') !!}
    {!! Html::style('public/backend/assets/plugins/dropify/dist/css/dropify.min.css') !!}

    <!-- page CSS -->
    {!! Html::style('public/backend/assets/plugins/select2/dist/css/select2.min.css') !!}
    {!! Html::style('public/backend/assets/plugins/bootstrap-select/bootstrap-select.min.css') !!}
    {!! Html::style('public/backend/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') !!}
    {!! Html::style('public/backend/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') !!}

@endsection

@section('title')
	Indicadores
@endsection

@section('main-content')	
	<div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Indicadores</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{!! route('backend.dashboard') !!}">Dashboard</a></li>
                    <li class="breadcrumb-item">Contenido</li>
                    <li class="breadcrumb-item">
                        <a href="{!! route('backend.content.indicators.list') !!}">
                            Indicadores
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        @if(is_object($oIndicator))
                            Editar Artículo de Contenido
                        @else
                            Agregar Artículo de Contenido
                        @endif
                    </li>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row" id="validation">
            <div class="col-12">
                <div class="card wizard-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <h4 class="card-title">
                                  @if(is_object($oIndicator))
                                    Editar Indicador
                                  @else
                                    Agregar Indicador
                                  @endif
                                </h4>
                                <h6 class="card-subtitle">
                                  Por favor llene el formulario con los campos indicados
                                </h6>
                            </div>
                            <div class="col-md-4">
                                @can('backend_view_indicators')
                                    <a href="{!! route('backend.content.indicators.list') !!}" class="btn btn-info btn-sm waves-effect waves-light">
                                        <span class="btn-label">
                                            <i class="ti-menu-alt"></i>
                                        </span>
                                        Indicadores
                                    </a>
                                @endcan
                            </div>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        
                        <!-- Formulario de usuarios -->
                        @if(is_object($oIndicator))
                            {!! Form::model($oIndicator, ['route' => ['backend.content.indicators.update', $oIndicator->id], 'method' => 'PUT', 'class' => 'form p-t-20', 'name' => 'indicatorForm', 'id' => 'indicatorForm', 'files' => true]) !!}
                            {!! Form::hidden('id', $oIndicator->id) !!}
                        @else
                            {!! Form::open(['route' => 'backend.content.indicators.store', 'method' => 'POST', 'name' => 'indicatorForm', 'id' => 'indicatorForm', 'class' => 'form p-t-20', 'files' => true]) !!}
                        @endif

                            <div class="form-group">
                                <label for="title"><strong>Título <span class="text-danger">*</span></strong></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="indicator-title">
                                            <i class="ti-text"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('title', null, ['id' => 'title', 'placeholder' => 'Ingrese el título del indicador', 'class' => 'form-control', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="summary"><strong>Descripcion <span class="danger">*</span></strong></label>
                                {!! Form::textarea('summary', null, ['id' => 'summary', 'placeholder' => 'Ingrese una pequeña descripción del indicador', 'class' => 'form-control', 'required']) !!}
                            </div>

                            <div class="form-group">
                                <label for="type"><strong>Tipo <span class="text-danger">*</span></strong></label>
                                {!! Form::select('type', ['Ingresos' => 'Ingresos', 'Gastos' => 'Gastos', 'Resultados' => 'Resulatdos', 'Deuda Pública' => 'Deuda Pública'], null, ['id' => 'type', 'class' => 'select2 form-control', 'required', 'placeholder' => 'Seleccione el tipo']) !!}
                            </div>

                            <div class="form-group">
                                <label for="indicator"><strong>Indicador <span class="text-danger">*</span></strong></label>
                                {!! Form::select('indicator', ['Valor Percapita' => 'Valor Percapita', 'Valor Total' => 'Valor Total'], null, ['id' => 'indicator', 'class' => 'select2 form-control', 'required', 'placeholder' => 'Seleccione el indicador']) !!}
                            </div>

                            <div class="form-group">
                                <label for="unity"><strong>Unidad <span class="text-danger">*</span></strong></label>
                                {!! Form::select('unity', ['USD' => 'USD', 'Porcentaje' => 'Porcentaje'], null, ['id' => 'unity', 'class' => 'select2 form-control', 'required', 'placeholder' => 'Seleccione la Unidad']) !!}
                            </div>

                            <div class="form-group">
                                <label for="value"><strong>Valor <span class="text-danger">*</span></strong></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="indicator-value">
                                            <i class="ti-text"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('value', null, ['id' => 'value', 'placeholder' => 'Ingrese el valor del indicador', 'class' => 'form-control', 'required']) !!}
                                </div>
                            </div>

                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-outline-info ladda-button" data-style="zoom-out" name="indicatorBtn" id="indicatorBtn">
                                    <i class="fa fa-save"></i>
                                    <span class="ladda-label">Guardar Indicador</span>
                                </button>
                            </div>
                        
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
@endsection

@section('custom-js')
    {!! Html::script('public/backend/assets/plugins/jquery-validation/js/jquery.validate.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/plugins/jquery-validation/js/additional-methods.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/plugins/jquery.blockui.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/plugins/wizard/jquery.steps.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/plugins/dropify/dist/js/dropify.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/plugins/switchery/dist/switchery.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/plugins/select2/dist/js/select2.full.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/plugins/bootstrap-select/bootstrap-select.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js', ['type' => 'text/javascript']) !!}
    <!-- wysuhtml5 Plugin JavaScript -->
    {!! Html::script('public/vendor/unisharp/laravel-ckeditor/ckeditor.js', ['type' => 'text/javascript']) !!}
    <script type="text/javascript">
        var urlIndicatorsList = '{!! route('backend.content.indicators.list') !!}';
    </script>
    {!! Html::script('public/backend/assets/js/form-validate/form-validation-indicator.min.js', ['type' => 'text/javascript']) !!}
@endsection