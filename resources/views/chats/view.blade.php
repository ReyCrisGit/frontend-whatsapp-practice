<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('whatsapp.ico')}}" type="image/png" sizes="16x16">
    <title>WhatsApp</title>
    <script>
        function Eliminar(value) {
            action = confirm(value) ? true : event.preventDefault()
        }
    </script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            background-image: url({{asset('images/fondo_whatsapp.jpg')}});
            
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            max-width: 720px;
            height: 70vh;
        }
        .title_container {
            background-color: #128C7E;
            width: 100%;
            padding: 1em;
            border-radius: 1em;
        }
        .title {
            color: #fff;
            text-align: center;
        }
        .main_container {
            background-color: #ECE5DD;
            border-radius: 1em;
            width: 100%;
            padding: 1em;
        }
        .btn_container {
            display: flex;
            justify-content: space-evenly;
        }
        .btn {
            display: inline-block;
            padding: 1em;
            text-decoration: none;
            background-color: #128C7E;
            border-radius: 1em;
            color: #fff;
            font-weight: 700;
            font-size: 16px;
        }
        .btn_eliminar {
            padding: 1.3em;
            border: none;
        }
    </style>
</head>

<body>
    <section class="container">
        <header class="title_container">
            <h2 class="title">Chats</h2>
        </header>
        <main class="main_container">
            <table>
                <tr>
                    <th>Cuenta</th>
                    <td>{{ $chat->cuenta->nombre }}</td>
                </tr>
                <tr>
                    <th>Contacto</th>
                    <td>{{ $chat->contacto->nombre }}</td>
                </tr>
                <tr>
                    <th>Mensaje</th>
                    <td>{{ $chat->mensaje }}</td>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <td>{{ $chat->fecha }}</td>
                </tr>
            </table>
            <div class="btn_container">
                <a class="btn" href="/chats" class="btn">Volver</a>
                <a class="btn" href="/chats/{{ $chat->id }}/edit">Editar</a>
                <form action="{{ route('chats.destroy', $chat->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    @csrf
                    <input class="btn btn_eliminar" class="btn btn_eliminar" type="submit" value="Eliminar"
                        onclick="return Eliminar('Eliminar chat')">
                </form>
            </div>
        </main>
    </section>
</body>

</html>
