<!DOCTYPE html>
<html>

<head>
    <title>Detalles de la solicitud del tour:</title>
</head>

<body>
    <h2>Detalles del Tour</h2>
    <p style="border-bottom: 1px dashed #000; padding-bottom:0.6em">
        <span style="color:#00a6d6">Nombre:</span>
        {{ $nombre }}</p>
    <p style="border-bottom: 1px dashed #000; padding-bottom:0.6em">
        <span style="color:#00a6d6">Email:</span> 
        {{ $email }}</p>
    <p style="border-bottom: 1px dashed #000; padding-bottom:0.6em">
        <span style="color:#00a6d6">Adultos:</span> 
        {{ $adultos }}</p>
    <p style="border-bottom: 1px dashed #000; padding-bottom:0.6em">
        <span style="color:#00a6d6">Niños:</span> 
        {{ $childs }}</p>
    <p style="border-bottom: 1px dashed #000; padding-bottom:0.6em">
        <span style="color:#00a6d6">Fecha de Viaje:</span> 
        {{ $date }}
    </p>
    <p style="border-bottom: 1px dashed #000; padding-bottom:0.6em">
        <span style="color:#00a6d6">Número de Teléfono:</span>
        {{ $phone }}</p>
    <p style="border-bottom: 1px dashed #000; padding-bottom:0.6em">
        <span style="color:#00a6d6">Tour:</span> 
        {{ $tour }}</p>
    <p style="border-bottom: 1px dashed #000; padding-bottom:0.6em">
        <span style="color:#00a6d6">Mensaje:</span> 
        {{ $mensaje }}</p>
</body>

</html>
