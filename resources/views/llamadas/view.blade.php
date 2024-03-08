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
            font-family: Arial, Helvetica, sans-serif;
        }
        body {
            display: flex;
            height: 70vh;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-image: url({{asset('images/fondo_whatsapp.jpg')}});
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            max-width: 960px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        th, td {
            padding: 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}

        th {
            background-color: #128C7E;
            color: white;
            font-size: 20px;
            text-align: center;
        }

        td {
            background-color: #ECE5DD;
        }

        .whatsapp-green {
            background-color: #25D366;
            color: white;
        }

        .whatsapp-light-green {
            background-color: #DFF0D8;
        }

        .whatsapp-gray {
            background-color: #E4E4E4;
        }
        .container_foto {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        .nombre_grupo {
            font-size: 50px;
        }
        .btn_volver {
            display: block;
            padding: 1em;
            background-color: #128C7E;
            border-radius: .5em;
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            margin-top: 30px;
        }
        .foto {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: block;
        }
        
    </style>
</head>
<body>
    <section class="container">
        <figure class="container_foto">
            <img src="{{asset('images/llamadas.png')}}" alt="icono" title="Thor Odinson" class="foto">
            <span class="nombre_grupo">{{$llamada->contacto->nombre}}</span>
        </figure>
        <main>
            <table>
                <tr>
                    <th>Cuenta</th>
                    <td>{{$llamada->cuenta->nombre}}</td>
                </tr>
                <tr>
                    <th>Contacto</th>
                    <td>{{$llamada->contacto->nombre}}</td>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <td>{{$llamada->fecha}}</td>
                </tr>
            </table>
            
        </main>
        <div class="btn_container_volver">
            <a href="/llamadas" class="btn_volver">Volver</a>
        </div>
    </section>
</body>
</html>