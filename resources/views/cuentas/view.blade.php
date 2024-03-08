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
    <header>
        <h3>{{$cuenta->nombre}}</h3>
    </header>
    <img src="{{ asset('images/whatsapp.png') }}" alt="Imagen de Whatsapp" width="100" height="100" class="img-rounded">
    {{-- <a href="http://127.0.0.1:8000/chats">Chats</a>
    <a href="http://127.0.0.1:8000/grupos">Grupos</a>
    <a href="http://127.0.0.1:8000/comunidades">Comunidades</a>
    <a href="http://127.0.0.1:8000/contactos">Contactos</a>
    <a href="http://127.0.0.1:8000/llamadas">Llamadas</a> --}}
    <a href="/chats">Chats</a>
    <a href="/grupos">Grupos</a>
    <a href="/comunidades">Comunidades</a>
    <a href="/contactos">Contactos</a>
    <a href="/llamadas">Llamadas</a>
    
</body>
</html>