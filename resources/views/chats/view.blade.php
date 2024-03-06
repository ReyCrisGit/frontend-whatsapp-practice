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
        <h2>Chat</h2>
    </header>
    <main>
        <table>
            <tr>
                <th>Cuenta</th>
                <td>{{$chat->cuenta->nombre}}</td>
            </tr>
            <tr>
                <th>Contacto</th>
                <td>{{$chat->contacto_id}}</td>
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
        </div>
    </main>
</body>
</html>