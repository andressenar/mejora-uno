<?php

namespace App\Http\Controllers;

use App\Models\Presidente;
use Illuminate\Http\Request;

class PresidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presidente = Presidente::orderBy('id', 'desc')->get();
        return view('presidente.index', compact('presidente'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('presidente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* dd($request->all()); */
        $presidente = new Presidente();
        $presidente->dni = $request->dni;
        $presidente->nombre = $request->nombre;
        $presidente->apellidos = $request->apellidos;
        $presidente->año = $request->año;
        $presidente->fecha_nac = $request->fecha_nac;
        
        $presidente->save();
        return redirect()->route('presidente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Presidente $destino)
    {
        return view('presidente.show',compact('presidente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presidente $destino)
    {
        return view('presidente.edit',compact('presidente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Presidente $presidente)
    {
        
        
        $presidente->dni = $request->dni;
        $presidente->nombre = $request->nombre;
        $presidente->apellidos = $request->apellidos;
        $presidente->año = $request->año;
        $presidente->fecha_nac = $request->fecha_nac;
        
        $presidente->save();
        return redirect()->route('presidente.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presidente $presidente)
    {
        $presidente->delete();
        return redirect()->route('presidente.index');
    }
}
