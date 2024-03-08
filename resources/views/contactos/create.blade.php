<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('whatsapp.ico')}}" type="image/png" sizes="16x16">
    <title>WhatsApp</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            /* Main font for body text */
            background-color: #F5F5F5;
            /* Light gray background */
            color: #25D366;
            /* WhatsApp green for text */
            
            width: 720px;
            margin: 0 auto;
            margin-top: 10vh;
            background-image: url({{(asset('images/fondo_whatsapp.jpg'))}});
        }

        header {
            background-color: #075E54;
            /* WhatsApp dark green for header */
            color: #fff;
            /* White text for header */
            padding: 1rem;
            border-radius: 1em;
        }

        h2 {
            text-align: center;
            margin: 0;
        }

        main {
            padding: 1rem;
        }

        form {
            background-color: #fff;
            /* White background for form */
            padding: 1rem;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            /* Subtle shadow for form */
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        select,
        textarea {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #DEDEDE;
            /* Light gray border for inputs */
            border-radius: 3px;
            margin-bottom: 1rem;
        }

        textarea {
            resize: vertical;
            /* Allow resizing textarea vertically */
        }

        .btn {
            background-color: #25D366;
            /* WhatsApp green for submit button */
            color: #fff;
            /* White text for submit button */
            padding: .9rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;

        }
        .btn_enviar {
            padding: .9rem;
        }
        .btn_container {
            display: flex;
            justify-content: space-evenly;
        }
    </style>
</head>
<body>
    <header>
        @if (isset($contacto))
            <h2>Editar Contacto</h2>
        @else
            <h2>Nuevo Contacto</h2>
        @endif
    </header>
    <main>
        <form action="{{isset($contacto) ? route('contactos.update', $contacto->id) : route('contactos.store')}}" method="post">
            @csrf
            @if (isset($contacto))
            {{method_field('PUT')}}
            @endif
            <label for="">Nombre
                <input type="text" name="nombre" id="" value="{{isset($contacto) ? $contacto->nombre : ''}}">
            </label>
            <label for="">Apellido
                <input type="text" name="apellido" id="" value="{{isset($contacto) ? $contacto->apellido : ''}}">
            </label>
            <label for="">Numero de Celular
                <input type="text" name="numero_celular" id="" value="{{isset($contacto) ? $contacto->numero_celular : ''}}">
            </label>
            <label for="">Pais
                <input type="text" name="pais" id="" value="{{isset($contacto) ? $contacto->pais : ''}}">
            </label>
            <label for="">Cuenta
                <select name="cuenta_id" id="">
                    @foreach ($cuentas as $cuenta)
                        @if (isset($contacto) && $cuenta->id === $contacto->cuenta_id)
                            <option selected="" value="{{$cuenta->id}}">{{$cuenta->nombre}}</option>
                        @else
                            <option value="{{$cuenta->id}}">{{$cuenta->nombre}}</option>
                        @endif
                    @endforeach
                </select>
            </label>
            <div class="btn_container">
                <input class="btn" type="submit" value="{{isset($contacto) ? 'Actualizar' : 'Agregar'}}">
                <a class="btn" href="/contactos/{{$contacto->id}}/view" class="btn">Cancelar</a>
            </div>
        </form>
    </main>
</body>
</html>