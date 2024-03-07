<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('whatsapp.ico')}}" type="image/png" sizes="16x16">
    <title>WhatsApp</title>
    <script>
        function Eliminar(value){
            action = confirm(value) ? true: event.preventDefault()
        }
    </script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }
        body {
            background-image: url({{asset('images/fondo_whatsapp.jpg')}})
        }
        .container {
            display: flex;
            
            justify-content: center;
            margin-top: 5rem;
            gap: 50px;
        }
        .container_header {
            display: flex;
            flex-direction: column;
            text-align: center;
            width: 400px;
            margin-top: 100px;
        }
        .container_main {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 500px;
        }
        .container_foto {
            width: 35%;
            margin: 0 auto;
        }
        .foto {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
        .datos {
            display: flex;
            gap: 40px;
            font-weight: 700;
        }
        .container_btn {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        .btn {
            display: block;
            padding: .7em;
            background-color: #128C7E;
            border: none;
            border-radius: .5em;
            color: #fff;
            text-decoration: none;
            font-weight: 700;
        }
        .btn_crear {
            background-color: #25D366;
        }
    </style>
</head>
<body>
    <section class="container">
        <header class="container_header">
            <figure class="container_img">
                <img src="{{ asset('images/whatsapp_icon.png') }}" alt="Imagen de Whatsapp" width="100" height="100" class="whatsapp_img">
            </figure>
            <p class="header_parragraph">WhatsApp es una herramienta versátil y conveniente que facilita la comunicación y te ayuda a mantenerte conectado con las personas que te importan.</p>
        </header>
        <main>
            <section class="container_main">
                <figure class="container_foto">
                    <img src="{{asset('images/nick_fury.webp')}}" alt="Nick Fury" title="Nick Fury" class="foto">
                </figure>
                <table class="container_table">
                    @foreach ($cuentas as $cuenta)
                        <tr class="datos">
                            <td>{{$cuenta->nombre}}</td>
                            <td>{{$cuenta->apellido}}</td>
                            <td>{{$cuenta->correo}}</td>
                            <td>{{$cuenta->numero_celular}}</td>
                        </tr>
                    @endforeach
                </table>
                <div class="container_btn">
                    <a class="btn" href="cuentas/{{$cuenta->id}}/view">Ver</a>
                                <a class="btn" href="cuentas/{{$cuenta->id}}/edit">Editar</a>
                                <form action="{{route('cuentas.destroy', $cuenta->id)}}" method="POST">
                                    {{method_field('DELETE')}}
                                    @csrf
                                    <input class="btn btn_eliminar" type="submit" value="Eliminar" onclick="return Eliminar('Eliminar cuenta')">
                                </form>
                                <a class="btn btn_crear" href="cuentas/create">Crear cuenta nueva</a>
                </div>

            </section>
        </main>
    </section>
</body>
</html>