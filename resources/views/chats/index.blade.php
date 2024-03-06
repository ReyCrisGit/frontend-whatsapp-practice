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
                    <td>{{$chat->contacto_id}}</td>
                    {{-- <td>{{$chat->mensaje}}</td>
                    <td>{{$chat->fecha}}</td> --}}
                    <td>
                        <a href="chats/{{$chat->id}}/view">Ver</a>
                        <a href="chats/{{$chat->id}}/edit">Editar</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </main>
</body>
</html>