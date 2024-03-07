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
        <div class="btn_container">
            <a href="grupos/create">Nuevo Grupo</a>
        </div>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Acción</th>
            </tr>
            @foreach ($grupos as $grupo)
                <tr>
                    <td>{{$grupo->nombre}}</td>
                    <td>
                        <a href="grupos/{{$grupo->id}}/view">Ver</a>
                        <a href="grupos/{{$grupo->id}}/edit">Editar</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </main>
</body>
</html>