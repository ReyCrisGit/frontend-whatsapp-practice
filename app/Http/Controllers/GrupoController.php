<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;
use App\Models\Cuenta;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grupos = Grupo::with('cuenta')->get();
        return view('grupos.index', compact('grupos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cuentas = Cuenta::all();
        return view('grupos.create', compact('cuentas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $grupo = new Grupo();
        $grupo->nombre = $request->nombre;
        $grupo->descripcion = $request->descripcion;
        $grupo->administrador_id = $request->administrador_id;
        $grupo->save();
        return redirect()->action([GrupoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //$grupo = Grupo::find($id);
        $grupo = Grupo::with('contactos')->find($id);
        return view('grupos.view', ['grupo' => $grupo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $grupo = Grupo::find($id);
        $cuentas = Cuenta::all();
        //return view('grupos.create', ['grupo' => $grupo]);
        return view('grupos.create', compact('grupo', 'cuentas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $grupo = Grupo::find($id);
        $grupo->nombre = $request->nombre;
        $grupo->descripcion = $request->descripcion;
        $grupo->administrador_id = $request->administrador_id;
        $grupo->save();
        return redirect()->action([GrupoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $grupo = Grupo::find($id);
        $grupo->delete();
        return redirect()->action([GrupoController::class, 'index']);
    }
}
