<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
</head>
<body>
    <h1>Hola usuario</h1>
    <!--Generar una lista de 10 usuarios-->
    <ul>
        @for ($i = 1; $i <= 10; $i++)
            <li>Usuario {{$i}}</li>
        @endfor
    </ul>

    <br>
    <br>

    <!--Generar una lista de mostrando solo los pares-->
    <ul>
        @for ($i = 1; $i <= 10; $i++)
            @if ($i % 2 == 0)
                <li>Usuario {{$i}} (impar)</li>
        @endfor

</body>
</html>