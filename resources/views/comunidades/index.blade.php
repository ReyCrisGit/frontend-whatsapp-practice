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
        <h2>Comunidades</h2>
    </header>
    <main>
        <div class="btn_container">
            <a href="comunidades/create">Nueva Comunidad</a>
        </div>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Acción</th>
            </tr>
            @foreach ($comunidades as $comunidad)
                <tr>
                    <td>{{$comunidad->nombre}}</td>
                    <td>
                        <a href="comunidades/{{$comunidad->id}}/view">Ver</a>
                        <a href="comunidades/{{$comunidad->id}}/create">Editar</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </main>
</body>
</html>