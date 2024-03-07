<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Whatsapp</title>
</head>
<body>
    <header>
        @if (isset($grupo))
            <h2>Editar Comunidad</h2>
        @else
            <h2>Nueva Comunidad</h2>
        @endif
    </header>
    <main>
        <form action="{{isset($comunidad) ? route('comunidades.update', $comunidad->id) : route('comunidades.store')}}" method="post">
            @csrf
            @if (isset($comunidad))
                {{method_field('PUT')}}
            @endif
            <label for="">Nombre
                <input type="text" name="nombre" id="" value="{{isset($comunidad) ? $comunidad->nombre : ''}}">
            </label>
            <label for="">Administrador
                <select name="administrador_id" id="">
                    @foreach ($cuentas as $cuenta)
                        @if (isset($comunidad) && $cuenta->id === $comunidad->administrador_id)
                            <option selected="" value="{{$cuenta->id}}">{{$cuenta->nombre}}</option>
                        @else
                            <option value="{{$cuenta->id}}">{{$cuenta->nombre}}</option>
                        @endif
                    @endforeach
                </select>
            </label>
            <label for="">Descripción
                <textarea name="descripcion" value="{{isset($comunidad) ? $comunidad->descripcion : ''}}" id="" cols="30" rows="10"></textarea>
            </label>
            <input type="submit" value="{{isset($grupo) ? 'Actualizar' : 'Crear'}}">
        </form>
    </main>
</body>
</html>