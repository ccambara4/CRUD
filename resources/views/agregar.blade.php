@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
  <h5 class="card-header">Agregar nuevo</h5>
  <div class="card-body">
   
    <p class="card-text">
        <form action="{{route("Tecnico.store")}}" method="POST">
        @csrf
            <label for="">Nombre</label>
            <input type="text" name="Nombre" class="form-control" required>
            <label for="">Apellido</label>
            <input type="text" name="Apellido" class="form-control" required>
            <br>
            <button class="btn btn-primary">Agregar</button>
            <a href="{{route("Tecnico.index")}}" class="btn btn-info">
            <span class="fas fa-user-"></span>Regresar
          </a>
        </form>
    </p>
    
  </div>
</div>
@endsection



