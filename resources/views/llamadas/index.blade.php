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
        <h2>LLamadas</h2>
    </header>
    <main>
        <div class="btn_container">
            <a href="llamadas/create">Nueva Llamada</a>
        </div>
        <table>
            <tr>
                <th>Cuenta</th>
                <th>Contacto</th>
                <th>Acción</th>
            </tr>
            @foreach ($llamadas as $llamada)
                <tr>
                    <td>{{$llamada->cuenta->nombre}}</td>
                    <td>{{$llamada->contacto->nombre}}</td>
                    <td>
                        <a href="llamadas/{{$llamada->id}}/view">Ver</a>
                        <a href="llamadas/{{$llamada->id}}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </main>
</body>
</html>