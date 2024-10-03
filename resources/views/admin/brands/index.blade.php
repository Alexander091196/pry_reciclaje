@extends('adminlte::page')

@section('title', 'ReciclaUSAT')

{{-- @section('content_header')
    <h1>Marcas</h1>
@stop --}}

@section('content')
    <div class="p-2"></div>

    <div class="card" >
        <div class="card-header">
            <h3>Marcas</h3>
            <a href="{{route('admin.brands.create')}}" class="btn btn-success float-right"><i class="fas fa-plus"></i> Nuevo</a>
        </div>
        <div class="card-body table-responsive" >
           
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCIÓN</th>
                        <th width = "10"></th>
                        <th width = "10"> </th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($brands as $brand)
                        <tr>
                            <td>{{$brand->id}}</td>
                            <td>{{$brand->name }} </td>
                            <td>{{$brand->description }}</td>
                            <td><a href="{{route('admin.brands.edit', $brand)}}" class="btn btn-primary"> <i class="fas fa-edit"></i></a> </td>
                            <td>
                                <form action="">
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
                
        </div>
    </div>
    
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop