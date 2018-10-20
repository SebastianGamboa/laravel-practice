@extends('layouts/index')

@section('content')

    @if(session('message'))
    <div class="alert alert-success text-center" role="alert">
        <strong>{{ session('message') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="row mt-4">
        <div class="col">
            <h1 class="text-center">Lista de Facturas</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/facturas/create" title="Crear factura"><i class="material-icons">add_circle</i></a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <table class="table table-hover table-bordered table-dark">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($facturas as $factura)
                    <tr>
                        <td>{{ $factura->product_id }}</td>
                        <td>{{ $factura->quantity }}</td>
                        <td>{{ $factura->pice }}</td>
                        <td class="text-center">
                            {!! link_to_route('facturas.edit', $title = 'edit', $parameters = ['factura' => $factura], 
                                    $attributes = ['class' => 'material-icons']) !!}
                            {!! Form::open(['route' => ['factura.destroy', $factura], 'method' => 'DELETE', 'style' => 'display: inline-block']) !!}
                                <button class="btn-delete" title="Eliminar factura">
                                    <i class="material-icons">delete</i>
                                </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection