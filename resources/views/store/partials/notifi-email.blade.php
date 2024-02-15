<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Fermaplastic</title>
</head>
<body>

<div class="container mt-5">
    <h4>Has recibido un formualrio de Contacto des de <span style="color: #293462;">FERMAPLASTIC.COM</span></h4>

    <p class="lead"><span style="color: black; font-weight: bold;"> NOMBRE CONTACTO: </span>  <span style="color: black;">{{ $nombre }}  {{ $apellidos }}</span> <br>

        <span style="color: black; font-weight: bold;">EMPRESA: </span> <span style="color: black;">{{ $empresa }}</span>,<br>
        <span style="color: black; font-weight: bold;">TELEFONO: </span> <span style="color: black;">{{ $tel }}</span>,<br>
        <span style="color: black; font-weight: bold;">CORREO: </span> <span style="color: black;">{{ $email }}</span>,<br>
        <span style="color: black; font-weight: bold;">CONSULTA: </span> <span style="color: black;">{{ $mensaje }}</span>

    </p>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/5d716e9845.js"></script>
</body>
</html>

