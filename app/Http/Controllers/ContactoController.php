<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Models\Chat;
use App\Models\Cuenta;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$contactos = Contacto::all();
        $contactos = Contacto::with('cuenta')->get();
        //return view ('contactos.index', ['contactos' => $contactos]);
        return view('contactos.index', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $chats = Chat::all();
        $contactos = Contacto::all();
        $cuentas = Cuenta::all();
        //return view('contactos.create', ['chats' => $chats]);
        return view('contactos.create', compact( 'cuentas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contacto = new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->apellido = $request->apellido;
        $contacto->numero_celular = $request->numero_celular;
        $contacto->pais = $request->pais;
        $contacto->cuenta_id = $request->cuenta_id;
        $contacto->save();
        return redirect()->action([ContactoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //$contacto = Contacto::find($id);
        $contacto = Contacto::with('cuenta')->find($id);
        return view('contactos.view', ['contacto' => $contacto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contacto = Contacto::find($id);
        $cuentas = Cuenta::all();
        //return view('contactos.create', ['contacto' => $contacto]);
        return view('contactos.create', compact('contacto', 'cuentas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contacto = Contacto::find($id);
        $contacto->nombre = $request->nombre;
        $contacto->apellido = $request->apellido;
        $contacto->numero_celular = $request->numero_celular;
        $contacto->pais = $request->pais;
        $contacto->cuenta_id = $request->cuenta_id;
        $contacto->save();
        return redirect()->action([ContactoController::class, 'index']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contacto = Contacto::find($id);
        $contacto->delete();
        return redirect()->action([ContactoController::class, 'index']);
    }
}
