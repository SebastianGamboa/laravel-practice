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
            <h1 class="text-center">Listado de Productos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/products/create" title="Agregar producto"><i class="material-icons">add_circle</i></a>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-sm-8">
            <table class="table table-bordered table-hover table-dark">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->price }}</td>
                            <td class="text-center">
                                <a href="products/{{ $product->id }}/edit"><i class="material-icons">edit</i></a>
                                {!! Form::open(['route' => ['products.destroy', $product], 'method' => 'DELETE', 'style' => 'display: inline-block']) !!}
                                    <button title="Eliminar" class="btn-delete">
                                        <i class="material-icons text-danger">delete</i>
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