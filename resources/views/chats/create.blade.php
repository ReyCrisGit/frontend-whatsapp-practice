<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WhatsApp</title>
</head>
<body>
    <header>
        @if (isset($chat))
            <h2>Editar Chat</h2>
        @else
            <h2>Nuevo Chat</h2>
        @endif
    </header>
    <main>
        <form action="{{isset($chat) ? route('chats.update', $chat->id) : route('chats.store')}}" method="post">
        @csrf
        @if (isset($chat))
        {{@method_field('PUT')}}
        @endif
        <label for="">Cuenta
            <select name="cuenta_id" id="">
                @foreach ($cuentas as $cuenta)
                    @if (isset($chat) && $cuenta->id === $chat->cuenta_id)
                        <option selected="" value="{{$cuenta->id}}">{{$cuenta->nombre}}</option>
                    @else
                        <option value="{{$cuenta->id}}">{{$cuenta->nombre}}</option>
                    @endif
                @endforeach
            </select>
        </label>
        <input type="submit" value="{{isset($chat) ? 'Actualizar' : 'Enviar'}}">
        </form>
    </main>
</body>
</html>