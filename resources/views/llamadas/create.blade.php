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
        @if (isset($llamada))
            <h2>Editar Llamada</h2>
        @else
            <h2>Nueva Llamada</h2>
        @endif
    </header>
    <main>
        <form action="{{isset($llamada) ? route('llamadas.update', $llamada->id) : route('llamadas.store')}}" method="post">
            @csrf
            @if (isset($llamada))
            {{method_field('PUT')}}
            @endif
            <label for="">Cuenta
                <select name="cuenta_id" id="">
                    @foreach ($cuentas as $cuenta)
                        @if(isset($llamada) && $cuenta->id === $llamada->cuenta_id)
                            <option selected="" value="{{$cuenta->id}}">{{$cuenta->nombre}}</option>
                        @else
                            <option value="{{$cuenta->id}}">{{$cuenta->nombre}}</option>
                        @endif
                    @endforeach
                </select>
            </label>
            <label for="">Contacto
                <select name="contacto_id" id="">
                    @foreach ($contactos as $contacto)
                        @if (isset($llamada) && $contacto->id === $llamada->contacto_id)
                            <option value="{{$contacto->id}}">{{$contacto->nombre}}</option>
                        @else
                            <option value="{{$contacto->id}}">{{$contacto->nombre}}</option>
                        @endif
                    @endforeach
                </select>
            </label>
            <label for="">Fecha y hora
                <input type="datetime-local" name="fecha" id="" value="{{($llamada) ? $llamada->fecha : ''}}">
            </label>
            <input type="submit" value="{{isset($llamada) ? 'Actulizar' : 'Llamar'}}">
        </form>
    </main>
</body>
</html>