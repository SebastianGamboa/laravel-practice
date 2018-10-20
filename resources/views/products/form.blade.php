<div class="card shadow border-0">
    <div class="card-body">
        <h5 class="card-title text-center">@yield('title')</h5>
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', $value = null, 
                $attributes = ['class' => 'form-control', 'placeholder' => 'Arroz']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('quantity', 'Cantidad') !!}
            {!! Form::number($name = 'quantity', $value = null, 
                $attributes = ['class' => 'form-control', 'placeholder' => '10']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('price', 'Precio') !!}
            {!! Form::number('price', $value = null,
                $attributes = ['class' => 'form-control', 'placeholder' => '$100.00']) !!}
        </div>
        {!! Form::submit($buttonLabel, ['class' => 'btn btn-outline-dark', 
            'style' => 'width: 100%']) !!}
    </div>
</div>