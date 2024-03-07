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
        <h2>Información de {{$contacto->nombre}}</h2>
    </header>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Numero de Celular</th>
            <th>Pais</th>
            {{-- <th>Guardado en la Cuenta</th> --}}
        </tr>
        <tr>
            <td>{{$contacto->nombre}}</td>
            <td>{{$contacto->apellido}}</td>
            <td>{{$contacto->numero_celular}}</td>
            <td>{{$contacto->pais}}</td>
            {{-- <td>{{$contacto->cuenta->nombre}}</td> --}}
        </tr>
    </table>
    <div class="btn_container">
        <a href="/contactos" class="btn">Volver</a>
    </div>
</body>
</html>