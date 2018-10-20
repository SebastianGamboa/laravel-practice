<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Show Users</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{ Html::style('css/app.css') }}
</head>
<body>
    <div class="container">
        @if(session('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>{{ session('message') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row mt-4">
            <div class="col-12"><h1 class="text-center">Usuarios registrados</h1></div>
        </div>
        <div class="row">
            <div class="col">
                <a href="/admin/create" title="Agregar usuario"><i class="material-icons">add_circle</i></a>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-sm-8">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="text-center">
                                <a href="/admin/{{$user->id}}/edit" title="Editar">
                                    <i class="material-icons mr-2">edit</i>
                                </a>
                                {!! Form::open(['route' => ['admin.destroy', $user->id], 'method' => 'DELETE', 'style' => 'display: inline-block']) !!}
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
    </div>
    {!! Html::script('js/app.js') !!}
</body>
</html>