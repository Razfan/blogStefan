@extends('layouts.app')

@section('buscar')
    <form action="{{ route('entradas.show'), $entradas->id }}" method="GET" >
    @csrf
    <div id="navbar-search-autocomplete" class="form-outline">
      <input type="search" id="id" class="form-control" name="id" />
    </div>
    <button type="submit" class="btn btn-primary" onclick="location.href='{{  route('entradas.show', $entradas->id) }}'">Buscar
    </button>
    </form>
  </div>
@endsection

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
                        
                        <p class="display-3">Listado de la tabla Entradas</p>
                        <table class="mb-3">
                            <tr style="background-color: #a3bac3">
                                <th><b>Usuario ID</b></th>
                                <th><b>ID</b></th>
                                <th><b>Categoria ID</b></th>
                                <th><b>Titulo</b></th>
                                {{-- <th><b>Imagen</b></th> --}}
                                <th><b>Descripcion</b></th>
                                <th><b>Fecha</b></th>
                                <th><b>Operaciones</b></th>
                                <th><b>Exportar</b></th>
                            </tr>
                            <tr>
                                <td>{{$entradas->usuario_id}}</td>
                                <td>{{$entradas->id}}</td>
                                <td>{{$entradas->categoria_id}}</td>
                                <td>{{$entradas->Titulo}}</td>
                                {{-- <td>{{$item->Imagen}}</td> --}}
                                <td>{{$entradas->Descripcion}}</td>
                                <td>{{$entradas->Fecha}}</td>
                                <td>
                                    @auth
                                    <button class="btn btn-info" onclick="location.href='{{ route('entradas.add')}}'">Añadir</button>
                                    <button class="btn btn-info" onclick="location.href='{{ route('entradas.edit', $entradas->id)}}'">Editar</button>
                                    <button class="btn btn-info" onclick="location.href='{{  route('entradas.delete', $entradas->id) }}'">Eliminar</button>
                                    
                                    @else
                                    <button class="btn btn-info" onclick="location.href='{{ route('login') }}'">Login</button>
                                    @endauth
                                    
                                </td>
                                <td>
                                    <img src="{{ asset('images/pdf.png') }}" onclick="location.href='{{ route('entradas.exportPDF')}}'"  class="img-fluid">
                                    <img src="{{ asset('images/excel.png') }}" onclick="location.href='{{ route('entradas.export')}}'"  class="img-fluid">
                                </td>
                                </tr>
                        </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection