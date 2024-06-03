@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
  <h5 class="card-header">Eliminar</h5>
  <div class="card-body">
   
    <p class="card-text">
    <div class="alert alert-danger" role="alert">
           ¿Estás seguro de eliminar el registro?

           <table class="table table-sm table-hover">
            <thead>
                <th>Nombre</th>
                <th>Apellido</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $tecnico->Nombre }}</td>
                    <td>{{ $tecnico->Apellido }}</td>
                </tr>
            </tbody>


           </table>
           <hr>
           <form action="{{route('Tecnico.destroy', $tecnico->id)}}" method="POST">
           @csrf
           @method('DELETE')
           <a href="{{route("Tecnico.index")}}" class="btn btn-info">
           <span class="fas fa-user-danger"></span>Regresar
        </a>
           <button class="btn btn-danger">Eliminar</button>
           </form>
               </div>
    </p>
    
  </div>
</div>

@endsection

