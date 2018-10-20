@extends('layouts/index')

@section('title', 'Registro de Productos')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row justify-content-center align-items-center" style="height: 100vh">
    <div class="col-sm-9 col-md-7 col-lg-5">
        {!! Form::open(['action' => 'ProductsController@store']) !!}
            @include('products/form')
        {!! Form::close() !!}
    </div>
</div>

@endsection