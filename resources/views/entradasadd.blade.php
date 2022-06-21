@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">Agregar Entrada</div>

              <div class="card-body">
                  <form action="{{ route('entradas.store') }}" method="POST" >
                      @csrf
                      <div class="form-group">
                            <input type="hidden" class="form-control" name="id" value="" required>
                        <label for="usuario">Usuario ID
                          <input type="text" class="form-control" name="usuario_id" value="" required>
                      </label><br />
                        <label for="categoria_id">Categoria ID
                            <input type="text" class="form-control" name="categoria_id" value="" required>
                        </label><br />
                        <label for="Titulo">Titulo
                            <input type="text" class="form-control" name="Titulo" value="" required>
                        </label><br />
                        <label for="Imagen">Imagen
                            <input type="file" placeholder="Imagen" class="form-control" name="Imagen" value="" required>
                        </label><br /><br />
                        <label for="Descripcion">Descripcion
                            <input type="text" class="form-control" name="Descripcion" value="" required>
                        </label><br />
                          <input type="hidden" class="form-control mb-3" name="Fecha" value="{{ date('Y-m-d H:i:s')}}" required>
                        <label for="anadirEntrada">
                            <input type="submit" value="Añadir" name="anadirEntrada" class="btn btn-success ">
                        </label><br />
                    </div>

                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection