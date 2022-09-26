<?php

namespace App\Http\Controllers;

use App\Models\TipoSangre;
use Illuminate\Http\Request;

class TipoSangreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultado = TipoSangre::all();
        return view('tipos_sangre.index', compact('resultado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipos_sangre.create');
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
        TipoSangre::create($input);
        return redirect('tipos_sangre')->with('flash_message', 'Tipo de sangre agregado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoSangre  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dato = TipoSangre::find($id);
        return view('tipos_sangre.show', compact('dato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoSangre  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato = TipoSangre::find($id);
        return view('tipos_sangre.edit', compact('dato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoSangre  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dato = TipoSangre::find($id);
        $input = $request->all();
        $dato->update($input);
        return redirect('tipos_sangre')->with('flash_message', 'Tipo de sangre modificado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoSangre  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TipoSangre::destroy($id);
        return redirect('tipos_sangre')->with('flash_message', 'Tipo de sangre eliminado exitosamente!');
    }
}
