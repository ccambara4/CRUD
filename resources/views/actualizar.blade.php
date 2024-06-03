@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
  <h5 class="card-header">Actualizar</h5>
  <div class="card-body">
    
   
    <p class="card-text">
        <form action="{{route('Tecnico.update', $tecnico->id)}}" method="POST">
          @csrf
          @method("PUT")
            <label for="">Nombre</label>
            <input type="text" name="Nombre" class="form-control" required value="{{$tecnico->Nombre}}">
            <label for="">Apellido</label>
            <input type="text" name="Apellido" class="form-control" required value="{{$tecnico->Apellido}}">
            <br>
            <button class="btn btn-warning">Actualizar</button>
           <form action="">
           <a href="{{route("Tecnico.index")}}" class="btn btn-info">
           <span class="fas fa-user-danger"></span>Regresar
        </a>
        </form>
        </form>
    </p>
    
  </div>
</div>

@endsection

