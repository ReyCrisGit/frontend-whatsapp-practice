<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Llamada;
use App\Models\Cuenta;
use App\Models\Contacto;

class LlamadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $llamadas = Llamada::with('cuenta')->get();
        return view('llamadas.index', compact('llamadas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cuentas = Cuenta::all();
        $contactos = Contacto::all();
        return view('llamadas.create', compact('cuentas', 'contactos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $llamada = new Llamada();
        $llamada->cuenta_id = $request->cuenta_id;
        $llamada->contacto_id = $request->contacto_id;
        $llamada->fecha = $request->fecha;
        $llamada->save();
        return redirect()->action([LlamadaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $llamada = Llamada::find($id);
        return view('llamadas.view', ['llamada' => $llamada]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $llamada = Llamada::find($id);
        return view('llamadas.create', ['llamada' => $llamada]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $llamada = Llamada::find($id);
        $llamada->cuenta_id = $request->cuenta_id;
        $llamada->contacto_id = $request->contacto_id;
        $llamada->fecha = $request->fecha;
        $llamada->save();
        return redirect()->action([LlamadaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $llamada = Llamada::find($id);
        $llamada->delete();
        return redirect()->action([LlamadaController::class, 'index']);
    }
}
