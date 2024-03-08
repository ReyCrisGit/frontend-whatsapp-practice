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
            height: 70vh;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-image: url({{asset('images/fondo_whatsapp.jpg')}});
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            max-width: 960px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        th, td {
            padding: 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}

        th {
            background-color: #128C7E;
            color: white;
            font-size: 20px;
            text-align: center;
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
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        .nombre_grupo {
            font-size: 50px;
        }
        .btn_volver {
            display: block;
            padding: 1em;
            background-color: #128C7E;
            border-radius: .5em;
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            margin-top: 30px;
        }
        .foto {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: block;
        }
        
    </style>
</head>
<body>
    <section class="container">
        <figure class="container_foto">
            <img src="{{asset('images/grupos.png')}}" alt="icono" title="Thor Odinson" class="foto">
            <span class="nombre_grupo">{{$grupo->nombre}}</span>
        </figure>
        <main>
            <table>
                {{-- <tr>
                    <th>Nombre</th>
                    <td>{{$grupo->nombre}}</td>
                </tr>
                <tr>
                    <th>Descripción</th>
                    <td>{{$grupo->descripcion}}</td>
                </tr>
                <tr>
                    <th>Administrador</th>
                    <td>{{$grupo->cuenta->nombre}}</td>
                </tr> --}}
                {{-- @foreach ($grupo->contactos as $contacto)
                    <tr>
                        <th>Participantes</th>
                        <td>
                            <p>Nombre: {{$contacto->nombre}}</p>
                            <p>Apellido: {{$contacto->apellido}}</p>
                            <p>Celular: {{$contacto->numero_celular}}</p>
                        </td>
                    </tr>
                @endforeach --}}
                {{-- <tr>
                    <th>Participantes</th>
                
                    @foreach ($grupo->contactos as $contacto)
                    <td>
                        <p>Nombre: {{$contacto->nombre}}</p>
                        <p>Apellido: {{$contacto->apellido}}</p>
                        <p>Celular: {{$contacto->numero_celular}}</p>
                    </td>
                    @endforeach
                </tr> --}}
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Administrador</th>
                    <th>Participantes</th>
                </tr>
                <tr>
                    <td>{{$grupo->nombre}}</td>
                    <td>{{$grupo->descripcion}}</td>
                    <td>{{$grupo->cuenta->nombre}}</td>
                    <td>
                        @foreach ($grupo->contactos as $contacto)
                            <span>{{ $contacto->nombre }}</span>
                            <span>{{ $contacto->apellido }}</span>
                            <span>{{ $contacto->numero_celular }}</span><br>
                        @endforeach
                    </td>
                </tr>
            </table>
        </main>
        <div class="btn_container_volver">
            <a href="/grupos" class="btn_volver">Volver</a>
        </div>
    </section>
</body>
</html>