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
        <h2>Grupos</h2>
    </header>
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
        <div class="btn_container">
            <a href="/grupos" class="btn">Volver</a>
        </div>
    </main>
</body>
</html>