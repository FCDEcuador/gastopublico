@extends('backend.layouts.backend-layout')

@section('custom-css')
    
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
                    <li class="breadcrumb-item active">Indicadores</li>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <h4 class="card-title">
                                  Lista de Indicadores
                                </h4>
                                <h6 class="card-subtitle">
                                  A continuacion la lista de indicadores generados para el portal web
                                </h6>
                            </div>
                            <div class="col-md-4">
                                @can('backend_add_indicators')
                                    <a href="{!! route('backend.content.indicators.create') !!}" class="btn btn-info btn-sm waves-effect waves-light">
                                        <span class="btn-label">
                                            <i class="ti-plus"></i>
                                        </span>
                                        Agregar Indicador
                                    </a>
                                @endcan
                            </div>
                            <div class="col-md-12">
                                <div class="table-responsive m-t-40 p-b-40">
                                    <table class="table table-hover table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th><i class="fa fa-cogs"></i></th>
                                            <th>Titulo</th>
                                            <th>Tipo</th>
                                            <th>Indicador</th>
                                            <th>Unidad</th>
                                            <th>Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($indicatorsList->isNotEmpty())
                                            @foreach($indicatorsList as $oIndicator)
                                              <tr>
                                                <td> 
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-xs btn-success dropdown-toggle waves-effect waves-light ladda-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="deleteIndicatorBtn_{!! $oIndicator->id !!}" data-style="zoom-out">
                                                            <span class="ladda-label">
                                                                <i class="fa fa-cog"></i>
                                                            </span>
                                                            <span class="ladda-spinner"></span>
                                                        </button>
                                                        <div class="dropdown-menu animated flipInX">
                                                            @can('backend_edit_indicators')
                                                                <a class="btn btn-xs btn-info waves-effect waves-light text-white" href="{!! route('backend.content.indicators.edit', [$oIndicator->id]) !!}" style="width:90%;margin-left:8px;margin-top:5px">
                                                                    <span class="btn-label">
                                                                        <i class="fa fa-pencil text-white"></i>
                                                                    </span>
                                                                    Editar Indicador
                                                                </a>
                                                            @endcan
                                                            @can('backend_delete_indicators')
                                                                <a class="btn btn-xs btn-danger waves-effect waves-light text-white" onclick="javascript: confirmDelete('deleteIndicatorForm_{!! $oIndicator->id !!}', 'deleteIndicatorBtn_{!! $oIndicator->id !!}', 'BlaudCMS :: Indicadores', 'Esta seguro que desea eliminar el indicador {!! $oIndicator->title !!}', '{!! route('backend.content.indicators.list') !!}', true);"  style="width:90%;margin-left:8px;margin-top:5px;">
                                                                    <span class="btn-label">
                                                                        <i class="fa fa-trash text-white"></i>
                                                                    </span>
                                                                    Eliminar Indicador
                                                                </a>
                                                                {!! Form::open(['route' => ['backend.content.indicators.delete', $oIndicator->id], 'method' => 'DELETE', 'name' => 'deleteIndicatorForm_'.$oIndicator->id, 'id' => 'deleteIndicatorForm_'.$oIndicator->id]) !!}
                                                                {!! Form::close() !!}
                                                            @endcan
                                                        </div>
                                                    </div>
                                                </td>
                                                <td> {!! $oIndicator->title !!} </td>
                                                <td> {!! $oIndicator->type !!}</td>
                                                <td> {!! $oIndicator->indicator !!}</td>
                                                <td> {!! $oIndicator->unity !!}</td>
                                                <td> {!! $oIndicator->value !!}</td>
                                              </tr>
                                            @endforeach
                                        @else
                                          <tr>
                                              <td colspan="6" class="table-info"> 
                                                  Aún no existen indicadores en el sistema.
                                              </td>
                                          </tr>
                                      @endif
                                    </tbody>
                                    </table>
                                </div>
                                <div align="center">
                                    {!! $indicatorsList->links() !!}
                                </div>


                            </div>
                        </div>
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
    {!! Html::script('public/backend/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/plugins/jquery.blockui.min.js', ['type' => 'text/javascript']) !!}
@endsection