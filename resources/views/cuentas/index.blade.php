<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('whatsapp.ico')}}" type="image/png" sizes="16x16">
    <title>WhatsApp</title>
</head>
<body>
    <header class="header container">
        <h3 class="header_title">WhatsApp</h3>
        <p class="header_parragraph">WhatsApp es una herramienta versátil y conveniente que facilita la comunicación y te ayuda a mantenerte conectado con las personas que te importan.</p>
    </header>
    <main>
        <section class="container">
            <div class="container_crear">
                <a href="cuentas/create">Nueva Cuenta</a>
            </div>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Celular</th>
                    <th>Acción</th>
                </tr>
                @foreach ($cuentas as $cuenta)
                    <tr>
                        <td>{{$cuenta->nombre}}</td>
                        <td>{{$cuenta->apellido}}</td>
                        <td>{{$cuenta->correo}}</td>
                        <td>{{$cuenta->numero_celular}}</td>
                        <td>
                            <a href="cuentas/{{$cuenta->id}}/view">Ver</a>
                            <a href="cuentas/{{$cuenta->id}}/edit">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>
    </main>
</body>
</html>