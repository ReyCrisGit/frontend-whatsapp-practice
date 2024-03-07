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
        @if (isset($grupo))
            <h2>Editar Grupo</h2>
        @else
            <h2>Nuevo Grupo</h2>
        @endif
    </header>
    <main>
        <form action="{{isset($grupo) ? route('grupos.update', $grupo->id) : route('grupos.store')}}" method="post">
        @csrf
        @if (isset($grupo))
            {{method_field('PUT')}}
        @endif
        <label for="">Nombre
            <input type="text" name="nombre" id="" value="{{isset($grupo) ? $grupo->nombre : ''}}">
        </label>
        <label for="">Descrición
            <textarea name="descripcion" id="" value="{{isset($grupo) ? $grupo->descripcion : ''}}" cols="30" rows="10"></textarea>
        </label>
        <label for="">Administrador
            <select name="administrador_id" id="">
                @foreach ($cuentas as $cuenta)
                    @if (isset($grupo) && $cuenta->id === $grupo->administrador_id)
                        <option selected="" value="{{$cuenta->id}}">{{$cuenta->nombre}}</option>
                    @else
                        <option value="{{$cuenta->id}}">{{$cuenta->nombre}}</option>
                    @endif
                @endforeach
            </select>
        </label>
        {{-- <label for="">Administrador
            <select name="administrador_id" id="">
                @foreach ($cuentas as $cuenta)
                    <option value="{{$cuenta->id}}">{{$cuenta->nombre}}</option>
                @endforeach
            </select>
        </label>   --}}      
        <input type="submit" value="{{isset($grupo) ? 'Actualizar' : 'Crear'}}">
        </form>
    </main>
</body>
</html>