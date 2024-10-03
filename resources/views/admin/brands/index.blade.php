@extends('adminlte::page')

@section('title', 'ReciclaUSAT')

{{-- @section('content_header')
    <h1>Marcas</h1>
@stop --}}

@section('content')
    <div class="p-2"></div>

    <div class="card">
        <div class="card-header">
            <h3>Marcas</h3>
            <a href="{{ route('admin.brands.create') }}" class="btn btn-success float-right"><i class="fas fa-plus"></i>
                Nuevo</a>
        </div>
        <div class="card-body table-responsive">

            <table class="table table-striped" id="datatable">
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
                            <td>{{ $brand->id }}</td>
                            <td>{{ $brand->name }} </td>
                            <td>{{ $brand->description }}</td>
                            <td><a href="{{ route('admin.brands.edit', $brand) }}" class="btn btn-primary"> <i
                                        class="fas fa-edit"></i></a> </td>
                            <td>
                                <form action="{{ route('admin.brands.destroy', $brand) }}" method="POST"
                                    class='frmEliminar'>
                                    @method('delete')
                                    @csrf
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




@stop

@section('js')
    <script>
        $('#datatable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/2.1.7/i18n/es-MX.json',
            },
        });

        $('.frmEliminar').submit(function(e) {
            e.preventDefault();

            Swal.fire({
                title: "Está seguro de eliminar?",
                text: "Está acción no se puede revertir!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, eliminar!"
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });
    </script>

    @if (session('success') != null)
        <script>
            Swal.fire({
                title: "Proceso exitoso!",
                text: "{{session('success')}}",
                icon: "success"
            });
        </script>
    @endif
@stop
