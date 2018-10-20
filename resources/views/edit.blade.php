<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Create User</title>
        {{ Html::style('css/app.css') }}
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
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
                    {!! Form::model($user, ['route' => ['admin.update', $user->id], 'method' => 'PUT']) !!}
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <h5 class="card-title text-center">Formulario de Registro</h5>
                                <div class="form-group">
                                    {!! Form::label('name', 'Nombre') !!}
                                    {!! Form::text('name', null, 
                                        $attributes = ['class' => 'form-control', 'placeholder' => 'Petrosky']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('email', 'Email') !!}
                                    {!! Form::email($name = 'email', null, 
                                        $attributes = ['class' => 'form-control', 'placeholder' => 'name@example.com']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('password', 'Contraseña') !!}
                                    {!! Form::password('password', 
                                        $attributes = ['class' => 'form-control', 'placeholder' => 'password']) !!}
                                </div>
                                {!! Form::submit('Actualizar', ['class' => 'btn btn-outline-dark', 
                                    'style' => 'width: 100%']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        
        {!! Html::script('js/app.js') !!}
    </body>
</html>