<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\TipoSangre;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultado = Estudiante::all();
        return view('estudiantes.index', compact('resultado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_sangre = TipoSangre::all();
        return view('estudiantes.create', compact('tipos_sangre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Estudiante::create($input);
        return redirect('estudiantes')->with('flash_message', 'Estudiante agregado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dato = Estudiante::find($id);
        return view('estudiantes.show', compact('dato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato = Estudiante::find($id);
        $tipos_sangre = TipoSangre::all();
        return view('estudiantes.edit', compact('dato', 'tipos_sangre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dato = Estudiante::find($id);
        $input = $request->all();
        var_dump($dato);
        $dato->update($input);
        return redirect('estudiantes')->with('flash_message', 'Estudiante modificado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Estudiante::destroy($id);
        return redirect('estudiantes')->with('flash_message', 'Estudiante eliminado exitosamente!');
    }
}
