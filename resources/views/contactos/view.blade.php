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
            font-family: Arial, Helvetica, sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
            background-image: url({{asset('images/fondo_whatsapp.jpg')}});
            
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            max-width: 720px;
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
        td {
            padding: 20px;
        }
    </style>
    <script>
        function Eliminar(value){
            action = confirm(value) ? true: event.preventDefault()
        }
    </script>
</head>
<body>
    <section class="container">
        <header class="title_container">
            <h2 class="title">Información de {{$contacto->nombre}}</h2>
        </header>
        <main class="main_container">
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Numero de Celular</th>
                    <th>Pais</th>
                    {{-- <th>Guardado en la Cuenta</th> --}}
                </tr>
                <tr >
                    <td>{{$contacto->nombre}}</td>
                    <td>{{$contacto->apellido}}</td>
                    <td>{{$contacto->numero_celular}}</td>
                    <td>{{$contacto->pais}}</td>
                    {{-- <td>{{$contacto->cuenta->nombre}}</td> --}}
                </tr>
            </table>
            <div class="btn_container">
                <a href="/contactos" class="btn">Volver</a>
                <a class="btn" href="/contactos/{{$contacto->id}}/edit">Editar</a>
                <form action="{{route('contactos.destroy', $contacto->id)}}" method="POST">
                    {{method_field('DELETE')}}
                    @csrf
                    <input class="btn btn_eliminar" type="submit" value="Eliminar" onclick="return Eliminar('Eliminar contacto')">
                </form>
        </main>
        </div>
    </section>
</body>
</html>