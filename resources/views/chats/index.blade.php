<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('whatsapp.ico')}}" type="image/png" sizes="16x16">
    <title>WhatsApp</title>
    <script>
        function Eliminar(value){
            action = confirm(value) ? true: event.preventDefault()
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
            background-image: url({{asset('images/fondo_whatsapp.jpg')}})
        }
        .btn_eliminar {
            background-image: url("{{asset('images/borrar.png')}}");
            background-size: contain;
            background-repeat: no-repeat;
            width: 40px;
            height: 40px;
            border: none;
            background-color: gray;
            cursor: pointer;
        }
        .link {
            display: block;
            padding: 1em;
            color: #000;
            text-decoration: none;
            font-size: 20px;
        }
        .btn {
            display: inline-block;
            background-color: #fff;
            border-radius: 50%;

        }
        .nav_container {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            background-color: #ECE5DD;
            border-radius: 20px;
        }
        .btn_container {
            width: 50px;
        }
        .new_chat {
            width: 100%;
        }

        .container_btn {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .buscar {
            padding: 1em;
            border: none;
            border-radius: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}

        th {
            background-color: #128C7E;
            color: white;
            font-size: 20px;
        }

        .whatsapp-green {
            background-color: #25D366;
            color: white;
        }

        .whatsapp-light-green {
            background-color: #DFF0D8;
        }

        .whatsapp-gray {
            background-color: #E4E4E4;
        }
        .container_foto {
            width: 35%;
        }
        .foto {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: block;
        }
        .container_main {
            margin: 20px 300px 0 300px;
        }
        

    </style>
</head>
<body>
    <section class="container_main">
        
        <main>
            <div class="nav_container">
                <figure class="container_foto">
                    <a href="/chats"><img src="{{asset('images/1004420.jpg')}}" alt="Chats" title="Chats" class="foto"></a>
                </figure>
                <div class="btn_container">
                    <a href="chats/create"><img src="{{asset('images/nuevochat.png')}}" alt="chat icono" title="Nuevo Chat" class="new_chat"></a>
                </div>
                <div class="btn_container">
                    <a href="/grupos"><img src="{{asset('images/grupos.png')}}" alt="grupo icono" title="Grupos" class="new_chat"></a>
                </div>
                <div class="btn_container">
                    <a href="/comunidades"><img src="{{asset('images/comunidad.png')}}" alt="comunidad icono" title="Comunidades" class="new_chat"></a>
                </div>
                <div class="btn_container">
                    <a href="/contactos"><img src="{{asset('images/contactos (2).png')}}" alt="contacto icono" title="Contactos" class="new_chat"></a>
                </div>
                <div class="btn_container">
                    <a href="/llamadas"><img src="{{asset('images/llamadas.png')}}" alt="llamada icono" title="Llamadas" class="new_chat"></a>
                </div>
                <form action="{{ route('chats.search') }}" method="GET">
                    <input class="buscar " type="text" name="search" placeholder="Buscar Chat">
                    <button class="buscar btn_buscar" type="submit">Buscar</button>
                </form>
            </div>
            <table>
                <tr>
                    <th>Contacto</th>
                    <th>Mensaje</th>
                    <th>Fecha</th>
                    <th>Acción</th>
                </tr>
                @foreach ($chats as $chat)
                    <tr class="whatsapp-light-green">
                        <td><a class="link" href="chats/{{$chat->id}}/view">{{$chat->contacto->nombre}}</a></td>
                        <td><a class="link" href="chats/{{$chat->id}}/view">{{$chat->mensaje}}</a></td>
                        <td><small>{{$chat->fecha}}</small></td>
                        <td class="container_btn">
                            {{-- <a href="chats/{{$chat->id}}/view"></a> --}}
                            <a class="btn" href="chats/{{$chat->id}}/edit"><img width="42" src="{{asset('images/lapiz.png')}}" alt=""></a>
                            <form action="{{route('chats.destroy', $chat->id)}}" method="POST">
                                {{method_field('DELETE')}}
                                @csrf
                                <input class="btn btn_eliminar" type="submit" value="" onclick="return Eliminar('Eliminar chat')">
                                {{-- <img src="{{asset('images/borrar.png')}}" alt="" > --}}
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </main>
    </section>
</body>
</html>