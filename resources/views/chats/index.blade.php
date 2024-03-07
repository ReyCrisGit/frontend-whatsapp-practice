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
        <h2>Chats</h2>
    </header>
    <main>
        <div class="btn_container">
            <a href="chats/create">Nuevo Chat</a>
        </div>
        <form action="{{ route('chats.search') }}" method="GET">
            <input class="buscar " type="text" name="search" placeholder="Buscar Chat">
            <button class="buscar btn_buscar" type="submit">Buscar</button>
        </form>
        <table>
            <tr>
                <th>Cuenta</th>
                <th>Contacto</th>
                {{-- <th>Mensaje</th>
                <th>Fecha</th> --}}
                <th>Acción</th>
            </tr>
            @foreach ($chats as $chat)
                <tr>
                    <td>{{$chat->cuenta->nombre}}</td>
                    <td>{{$chat->contacto->nombre}}</td>
                    {{-- <td>{{$chat->mensaje}}</td>
                    <td>{{$chat->fecha}}</td> --}}
                    <td>
                        <a href="chats/{{$chat->id}}/view">Ver</a>
                        {{-- <a href="chats/{{$chat->id}}/edit">Editar</a> --}}
                    </td>
                </tr>
            @endforeach
        </table>
    </main>
</body>
</html>