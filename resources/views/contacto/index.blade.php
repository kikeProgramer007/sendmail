<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>
<body>
    <header>
        <center><h1>Enviar correo con laravel</h1></center>
    </header>
    <main>
        <center>
            <form action="{{ route('contacto.store') }}" method="POST">
                @csrf
                <div>
                    <label for="asunto">Asunto:</label><br>
                    <input type="text" id="asunto" name="asunto" placeholder="Ingrese el asunto"><br>
                    @error('asunto')
                        <small style="color: red">{{$message}}</small>
                    @enderror
                </div><br>

                <div>
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre"><br>
                    @error('nombre')
                        <small style="color: red">{{$message}}</small>
                    @enderror
                </div><br>

                <div>
                    <label for="correo_remitente">Correo remitente:</label><br>
                    <input type="text" id="correo_remitente" name="correo_remitente" placeholder="Ingrese su correo"><br>
                    @error('correo_remitente')
                        <small style="color: red">{{$message}}</small>
                    @enderror
                </div><br>

                <div>
                    <label for="correo_destino">Correo destinatario:</label><br>
                    <input type="text" id="correo_destino" name="correo_destino" placeholder="Ingrese el correo destino"><br>
                    @error('correo_destino')
                        <small style="color: red">{{$message}}</small>
                    @enderror
                </div><br>

                <div>
                    <label for="nombre">Mensaje:</label><br>
                    <textarea name="mensaje" id="mensaje" cols="24" rows="4" placeholder="Escriba el mensaje"></textarea><br>
                    @error('mensaje')
                        <small style="color: red">{{$message}}</small>
                    @enderror
                </div><br>

                <div>
                    <button type="submit">Enviar Mensaje</button>
                </div>

            </form>

            @if (Session::has('info'))
                <div>
                    <br>
                    <strong style="color: blue;">Enviado! {{Session::get('info')}}</strong>
                </div>
            @endif
        </center>
    </main>
    <footer>
        <center>
            <h5>Gracias por visitar mi página web.</h5>
        </center>
    </footer>
</body>
</html>