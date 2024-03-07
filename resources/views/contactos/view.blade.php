<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WhatsApp</title>
    <script>
        function Eliminar(value){
            action = confirm(value) ? true: event.preventDefault()
        }
    </script>
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
        <a href="/contactos/{{$contacto->id}}/edit">Editar</a>
        <form action="{{route('contactos.destroy', $contacto->id)}}" method="POST">
            {{method_field('DELETE')}}
            @csrf
            <input class="btn btn_eliminar" type="submit" value="Eliminar" onclick="return Eliminar('Eliminar contacto')">
        </form>
    </div>
</body>
</html>