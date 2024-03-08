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
        body {
            display: flex;
            justify-content: center;
            height: 70vh;
        }
        .container {
            display: flex;
            flex-direction: column;
            width: 60%;
            max-width: 960px;
            min-width: 360px;
            margin: 2%;
            align-items: center;
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
        .main_container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .main_container, .nav_container {
            width: 720px;
            max-width: 960px;
            min-width: 480px;
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
        </div>
        <main class="main_container">
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Acción</th>
                </tr>
                @foreach ($comunidades as $comunidad)
                    <tr class="whatsapp-light-green">
                        <td>{{$comunidad->nombre}}</td>
                        <td>
                            <a href="comunidades/{{$comunidad->id}}/view"><img src="{{asset('images/ver.png')}}" width="40" alt=""></a>
                            <a href="comunidades/{{$comunidad->id}}/edit"><img src="{{asset('images/lapiz.png')}}" alt="icono lapiz" width="35"></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </main>
        <div class="btn_container_crear">
            <a class="btn_crear" href="comunidades/create">Nueva Comunidad</a>
        </div>
    </section>
</body>
</html>