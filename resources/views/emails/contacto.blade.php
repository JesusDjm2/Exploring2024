<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2 style="color:rgb(36, 36, 36)">Correo enviado desde la página web Exploring Perú Tours</h2>
    <p style="border-bottom: 1px dashed #000; padding-bottom:0.6em">
        <span style="color:#00a6d6">Nombre:</span>
        <span>{{ $data['name'] }}</span>
    </p>
    <p style="border-bottom: 1px dashed #000; padding-bottom:0.6em">
        <span style="color:#00a6d6">Email:</span>
        {{ $data['email'] }}
    </p>
    <p style="border-bottom: 1px dashed #000; padding-bottom:0.6em">
        <span style="color:#00a6d6"> Teléfono:</span>
        {{ $data['phone'] }}
    </p>
    <p style="border-bottom: 1px dashed #000; padding-bottom:0.6em">
        <span style="color:#00a6d6">Nacionaidad:</span>
        {{ $data['country'] }}
    </p>
    <p style="border-bottom: 1px dashed #000; padding-bottom:0.6em">
        <span style="color:#00a6d6">Adultos:</span>
        {{ $data['adults'] }}
    </p>
    <p style="border-bottom: 1px dashed #000; padding-bottom:0.6em">
        <span style="color:#00a6d6">Tipo de viaje:</span>
        {{ $data['tipo'] }}
    </p>
    <p style="border-bottom: 1px dashed #000; padding-bottom:0.6em">
        <span style="color:#00a6d6">Mensaje:</span>
        {{ $data['message'] }}
    </p>
    <br><br>
    <div>
        <div style="text-align:center; color:#000">
            Copiryght 2024 © todos los derechos reservados | Exploring Perú Tours | Hecho por <a
                href="https://www.facebook.com/DjmWebMaster" style="text-decoration: none; color: #00a6d6" target="_blank"> DJM2</a>
        </div>
    </div>
</body>

</html>
