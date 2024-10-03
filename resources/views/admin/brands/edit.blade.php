@extends('adminlte::page')

@section('title', 'ReciclaUSAT')

@section('content')
    <div class="p-2"></div>
    <div class="card">
        <div class="card-header">
            <h3>Editar Marca</h3>
        </div>

        <div class="card-body">

            {!! Form::model($brand, ['route' => ['admin.brands.update', $brand], 'method' => 'put']) !!}

            @include('admin.brands.template.form')
            <button type="submit" class="btn btn-success"><i class="fas fa-pen-square"></i> Editar</button>

        </div>
        {!! Form::close() !!}
        <div class="card-footer">

        </div>
    </div>
@stop


@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
