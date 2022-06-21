@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <div class="card">

                <div class="card-body mx-auto">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <p class="display-3">Listado de la tabla Usuarios</p>
                    <table class="mb-3">
                        <tr style="background-color: #a3bac3;">
                            <th><b>ID</b></th>
                            <th><b>Nombre</b></th>
                            <th><b>Email</b></th>
                            <th><b>Operaciones</b></th>
                        </tr>
                        @foreach ($usuarios as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>
                                @auth
                                <button class="btn btn-info" onclick="location.href=''">Editar</button>
                                <button class="btn btn-info" onclick="location.href=''">Eliminar</button>
                                @else
                                <button class="btn btn-info" onclick="location.href='{{ route('login') }}'">Login</button>
                                @endauth
                            </td>
                        </tr>
                        @endforeach
                    </table>
                        {{ $usuarios->links("pagination::bootstrap-4") }}
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection