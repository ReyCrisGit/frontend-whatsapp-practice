<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;
use App\Models\Chat;

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
        $chats = Chat::all();
        $cuentas = Cuenta::all();
        return view('cuentas.create', ['chats' => $chats]);
        //return view('chats.create', ['cuentas' => $cuentas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255|unique:cuentas', // Validación única
            'numero_celular' => 'required|string|max:255',
            'contrasenia' => 'required|string|min:8',
        ]);
    
        // Si la validación falla, se redirecciona con un mensaje
    
        if (Cuenta::exists()) {
            return redirect()->back()->withErrors(['Ya existe una cuenta.']);
        }

        $cuenta = new Cuenta();
        $cuenta->nombre = $request->nombre;
        $cuenta->apellido = $request->apellido;
        $cuenta->correo = $request->correo;
        $cuenta->numero_celular = $request->numero_celular;
        $cuenta->contrasenia = bcrypt($request->contrasenia);
        $cuenta->save();
        /* return redirect()->action([CuentaController::class, 'index']); */
        return redirect()->action('cuenta.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cuenta = Cuenta::find($id);
        return view('cuentas.view', ['cuenta' => $cuenta]);
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
        $cuenta->save();
        return redirect()->action([CuentaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cuenta = Cuenta::find($id);
        $cuenta->delete();
        return redirect()->action([CuentaController::class, 'index']);
    }
}
