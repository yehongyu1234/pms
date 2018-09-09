@extends('voyager::master')
@section('page_header')
    <h1 class="page-title">
        <i class=""></i>
    </h1>
@stop

@section('content')
    <div class="page-content container-fluid">
        <h1>进度管理</h1>
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-bordered">
                <p>
                    This view is loaded from module: {!! config('projects.name') !!}
                    <br>
                    {!! QrCode::size(100)->generate(Request::url()); !!}
                </p>


                </div>
            </div>
        </div>
    </div>
@stop
