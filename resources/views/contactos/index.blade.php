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
        <h2>Contactos</h2>
    </header>
    <main>
        <div class="btn_container">
            <a href="contacto/create">Nuevo Contacto</a>
        </div>
        <table>
            @foreach ($contactos as $contacto)
                <tr>
                    <td>{{$contacto->nombre}}</td>
                    <td>{{$contacto->apellido}}</td>
                    <td>
                        <a href="contactos/{{$contacto->id}}/view">Ver</a>
                        <a href="contactos/{{$contacto->id}}/edit">Editar</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </main>
</body>
</html>