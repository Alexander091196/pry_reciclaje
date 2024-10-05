@extends('adminlte::page')

@section('title', 'ReciclaUSAT')

@section('content')
    <div class="p-2"></div>
    <div class="card">
        <div class="card-header">
            <h3>Nuevo Modelo</h3>
        </div>

        <div class="card-body">
            {!! Form::open(['route' => 'admin.models.store']) !!}

            @include('admin.models.template.form')
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Registrar</button>

        </div>
        {!! Form::close() !!}
        <div class="card-footer">

        </div>
    </div>
@stop


@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
