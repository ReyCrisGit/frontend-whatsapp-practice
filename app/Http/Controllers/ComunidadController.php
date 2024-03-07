<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunidad;
use App\Models\Cuenta;

class ComunidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comunidades = Comunidad::with('cuenta')->get();
        return view('comunidades.index', compact('comunidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cuentas = Cuenta::all();
        return view('comunidades.create', compact('cuentas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comunidad = new Comunidad();
        $comunidad->nombre = $request->nombre;
        $comunidad->administrador_id = $request->administrador_id;
        $comunidad->descripcion = $request->descripcion;
        $comunidad->save();
        return redirect()->action([ComunidadController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comunidad = Comunidad::with('contactos')->find($id);
        return view('comunidades.view', ['comunidad' => $comunidad]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comunidad = Comunidad::find($id);
        $cuentas = Cuenta::all();
        return view('comunidades.create', compact('comunidad', 'cuentas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comunidad = Comunidad::find($id);
        $comunidad->nombre = $request->nombre;
        $comunidad->administrador_id = $request->administrador_id;
        $comunidad->descripcion = $request->descripcion;
        $comunidad->save();
        return redirect()->action([ComunidadController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comunidad = Comunidad::find($id);
        $comunidad->delete();
        return redirect()->action([ComunidadController::class, 'index']);
    }
}
