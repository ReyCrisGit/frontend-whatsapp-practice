<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\Cuenta;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* $chats = Chat::all();
        return view('chats.index', ['chats' => $chats]); */
        $chats = Chat::with('cuenta')->get();
        return view('chats.index', compact('chats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $chats = Chat::all();
        $cuentas = Cuenta::all();
        return view('chats.create', ['cuentas' => $cuentas]);
        //return view('chats.create', compact('cuentas')); // Pasar las cuentas a la vista
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $chat = new Chat();
        $chat->cuenta_id = $request->cuenta_id;
        $chat->contacto_id = $request->contacto_id;
        $chat->mensaje = $request->mensaje;
        $chat->fecha = $request->fecha;
        $chat->save();
        return redirect()->action([ChatController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $chat = Chat::find($id);
        return view('chats.view', ['chat' => $chat]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $chat = Chat::find($id);
        return view('chats.create', ['chat' => $chat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $chat = Chat::find($id);
        $chat->cuenta_id = $request->cuenta_id;
        $chat->contacto_id = $request->contacto_id;
        $chat->mensaje = $request->mensaje;
        $chat->fecha = $request->fecha;
        $chat->save();
        return redirect()->action([ChatController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $chat = Chat::find($id);
        $chat->delete();
        return redirect()->action([ChatController::class, 'index']);
    }
}
