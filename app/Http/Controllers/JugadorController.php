<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugador = Jugador::orderBy('id', 'desc')->get();
        return view('jugador.index', compact('jugador'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jugador.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* dd($request->all()); */
        $jugador = new Jugador();
        $jugador->fecha_nac = $request->fecha_nac;
        $jugador->codigo = $request->codigo;
        $jugador->nombre = $request->nombre;
        $jugador->posicion = $request->posicion;
        
        
        $jugador->save();
        return redirect()->route('jugador.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jugador $jugador)
    {
        return view('jugador.show',compact('jugador'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jugador $jugador)
    {
        return view('jugador.edit',compact('jugador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jugador $jugador)
    {
        
        
        $jugador->fecha_nac = $request->fecha_nac;
        $jugador->codigo = $request->codigo;
        $jugador->nombre = $request->nombre;
        $jugador->posicion = $request->posicion;
        
        
        $jugador->save();
        return redirect()->route('jugador.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jugador $jugador)
    {
        $jugador->delete();
        return redirect()->route('jugador.index');
    }
}
