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
    <section class="container">
        <header>
            @if(isset($category))
            <h2>Editar Cuenta</h2>
            @else
            <h2>Crear Cuenta</h2>
            @endif
        </header>
        <form action="{{isset($cuenta) ? route('cuentas.update', $cuenta->id) : route('cuentas.store')}} " method="post">
            @csrf
            @if(isset($cuenta))
            {{method_field('PUT')}}
            @endif
            <label for="">Nombre
                <input type="text" name="nombre" id="" value="{{isset($cuenta) ? $cuenta->nombre : ''}}">
            </label>
            <label for="">Apellido
                <input type="text" name="apellido" id="" value="{{isset($cuenta) ? $cuenta->apellido : ''}}">
            </label>
            <label for="">Correo
                <input type="email" name="correo" id="" value="{{isset($cuenta) ? $cuenta->correo : ''}}">
            </label>
            <label for="">Celular
                <input type="text" name="numero_celular" id="" value="{{isset($cuenta) ? $cuenta->numero_celular : ''}}">
            </label>
            <label for="">Contraseña
                <input type="password" name="contrasenia" id="" value="{{isset($cuenta) ? $cuenta->contrasenia : ''}}">
            </label>
            <input type="submit" value="{{isset($cuenta) ? 'Actualizar' : 'Guardar'}}">
            <a href="/cuentas">Cancelar</a>
        </form>
    </section>
</body>
</html>