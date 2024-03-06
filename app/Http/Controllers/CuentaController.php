<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cuentas = Cuenta::all();
        return view('cuentas.index', ['cuentas' => $cuentas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cuentas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cuenta = new Cuenta();
        $cuenta->nombre = $request->nombre;
        $cuenta->apellido = $request->apellido;
        $cuenta->correo = $request->correo;
        $cuenta->numero_celular = $request->numero_celular;
        $cuenta->contrasenia = $request->contrasenia;
        $cuenta->tipo = $request->tipo;
        $cuenta->save();
        return redirect()->action([CuentaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cuenta = Cuenta::find($id);
        return view('cuentas', ['cuenta' => $cuenta]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cuenta = Cuenta::find($id);
        return view('cuentas.create', ['cuenta' => $cuenta]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cuenta = Cuenta::find($id);
        $cuenta->nombre = $request->nombre;
        $cuenta->apellido = $request->apellido;
        $cuenta->correo = $request->correo;
        $cuenta->numero_celular = $request->numero_celular;
        $cuenta->contrasenia = $request->contrasenia;
        $cuenta->tipo = $request->tipo;
        $cuenta->save();
        return redirect()->action([CuentaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
