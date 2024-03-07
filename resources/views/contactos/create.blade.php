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
            <input type="submit" value="{{isset($contacto) ? 'Actualizar' : 'Agregar'}}">
            <a href="/contactos/{{$contacto->id}}/view" class="btn">Cancelar</a>
        </form>
    </main>
</body>
</html>