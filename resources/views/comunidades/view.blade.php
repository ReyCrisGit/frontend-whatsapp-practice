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
        <h2>Información de la Comunidad {{$comunidad->nombre}}</h2>
    </header>
    <main>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Administrador</th>
                <th>Descripción</th>
                <th>Contactos</th>
                <th>Grupos</th>
            </tr>
            <tr>
                <td>{{$comunidad->nombre}}</td>
                <td>{{$comunidad->cuenta->nombre}}</td>
                <td>{{$comunidad->descripcion}}</td>
                <td>
                    @foreach ($comunidad->contactos as $contacto)
                        <span>{{$contacto->nombre}}</span>
                        <span>{{$contacto->apellido}}</span>
                        <span>{{$contacto->numero_celular}}</span><br>
                    @endforeach
                </td>
                <td>
                    @foreach ($comunidad->grupos as $grupo)
                        <span>{{$grupo->nombre}}</span><br>
                    @endforeach
                </td>
            </tr>
        </table>
        <div class="btn_container">
            <a href="/comunidades" class="btn">Volver</a>
        </div>
    </main>
</body>
</html>