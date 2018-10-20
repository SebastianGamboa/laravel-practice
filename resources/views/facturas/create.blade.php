@extends('layouts/index')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-sm-6">
    {!! Form::open(['route' => ['facturas.store']]) !!}
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title text-center">Crear Factura</h5>
                <div class="form-group">
                    {!! Form::label('product_id', 'Productos') !!}
                    {!! Form::select('product_id', $products, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un producto']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('quantity', 'Cantidad') !!}
                    {!! Form::number('quantity', null, ['class' => 'form-control', 'placeholder' => '10']) !!}
                </div>
            </div>
        </div>
    {!! Form::close() !!}
    </div>
</div>

@endsection