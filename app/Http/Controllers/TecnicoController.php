<?php

namespace App\Http\Controllers;

use App\Models\Tecnico;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //pagina de inicio
        $datos=Tecnico::all();
        return view('welcome', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Formulario para agregar
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Guardar datos en la base de datos
        $tecnico = new Tecnico();
        $tecnico->Nombre = $request->post('Nombre');
        $tecnico->Apellido = $request->post('Apellido');
        $tecnico->save();

        return redirect()->route('Tecnico.index')->with('succes', 'Agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //Mostrar un registro
        $tecnico =Tecnico::find($id);
        return view('eliminar', compact('tecnico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //Traemos los datos a editar
        $tecnico = Tecnico::find( $id );
        return view("actualizar", compact('tecnico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //Actualizar los datos
        $tecnico = Tecnico::find( $id );
        $tecnico->Nombre = $request->post('Nombre');
        $tecnico->Apellido = $request->post('Apellido');
        $tecnico->save();

        return redirect()->route('Tecnico.index')->with('succes', 'Actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //Elimina los datos
        $tecnico=Tecnico::find($id);
        $tecnico->delete();

        return redirect()->route('Tecnico.index')->with('succes', 'Eliminado con exito');
    }
}
