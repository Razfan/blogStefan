@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <body class="cuerpo">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12 mb-3 text-center">
                                    <p class="display-3">Mi Blog en Laravel Stefan</p>
                                </div>
                                <div class="col-xl-12 mb-3 text-center">
                                    <button class="btn btn-info" onclick="location.href='{{ route('usuarios.index') }}'">Listado Usuarios</button>
                                </div>
                                <div class="col-xl-12 mb-3 text-center">
                                    <button class="btn btn-info" onclick="location.href='{{ route('entradas.index') }}'">Listado Entradas</button>
                                </div>
                                <div class="col-xl-12 mb-3 text-center">
                                    <button class="btn btn-info" onclick="location.href='{{ route('entradas.export') }}'">Exportar Entradas</button>
                                </div>
                            </div>
                    </body>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
