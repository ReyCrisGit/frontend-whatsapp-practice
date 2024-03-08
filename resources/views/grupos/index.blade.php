<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('whatsapp.ico')}}" type="image/png" sizes="16x16">
    <title>WhatsApp</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url({{asset('images/fondo_whatsapp.jpg')}});
        }
        .container {
            display: flex;
            flex-direction: column;
            width: 60%;
            max-width: 960px;
            min-width: 360px;
            margin: 2%;
        }
        .header_container {
            display: flex;
            justify-content: space-evenly;
        }
        .img_container {
            width: 80px;
        }
        .img_grupo {
            display: block;
            width:100%;
        }
        .btn_container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }
        th {
            text-align: center;
        }
        .btn_container_2 {
            display: flex;
            justify-content: center;
        }
        .btn_crear {
            display: block;
            padding: 1em;
            background-color: #128C7E;
            border-radius: .5em;
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            margin-top: 30px;
        }
        .nav_container {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            background-color: #ECE5DD;
            border-radius: 20px;
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
        .main_container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
    <section class="container">
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
        {{-- <header class="header_container">
            <figure class="img_container">
                <img src="{{asset('images/grupos.png')}}" alt="Grupos icono" class="img_grupo">
            </figure>
            <div class="btn_container">
                <a class="btn_crear btn" href="grupos/create">Nuevo Grupo</a>
            </div>
        </header> --}}
        <main class="main_container">
            
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Acción</th>
                </tr>
                @foreach ($grupos as $grupo)
                    <tr class="whatsapp-light-green">
                        <td>{{$grupo->nombre}}</td>
                        <td class="btn_container_2">
                            <a class="btn" href="grupos/{{$grupo->id}}/view"><img src="{{asset('images/ver.png')}}" width="40" alt=""></a>
                            <a class="btn" href="grupos/{{$grupo->id}}/edit"><img src="{{asset('images/lapiz.png')}}" alt="icono lapiz" width="35"></a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="btn_container_crear">
                <a class="btn_crear" href="grupos/create">Nuevo Grupo</a>
            </div>
        </main>
    </section>
</body>
</html>