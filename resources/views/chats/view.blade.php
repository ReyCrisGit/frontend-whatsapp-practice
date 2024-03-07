<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WhatsApp</title>
    <script>
        function Eliminar(value){
            action = confirm(value) ? true: event.preventDefault()
        }
    </script>
</head>
<body>
    <header>
        <h2>Chats</h2>
    </header>
    <main>
        <table>
            <tr>
                <th>Cuenta</th>
                <td>{{$chat->cuenta->nombre}}</td>
            </tr>
            <tr>
                <th>Contacto</th>
                <td>{{$chat->contacto->nombre}}</td>
            </tr>
            <tr>
                <th>Mensaje</th>
                <td>{{$chat->mensaje}}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{{$chat->fecha}}</td>
            </tr>
        </table>
        <div class="btn_container">
            <a href="/chats" class="btn">Volver</a>
            <a href="/chats/{{$chat->id}}/edit">Editar</a>
            <form action="{{route('chats.destroy', $chat->id)}}" method="POST">
                {{method_field('DELETE')}}
                @csrf
                <input class="btn btn_eliminar" type="submit" value="Eliminar" onclick="return Eliminar('Eliminar chat')">
            </form>
        </div>
    </main>
</body>
</html>