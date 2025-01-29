<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
    @include('menu')
    <div class="container">
        <h1 class="text-center my-4">Dashboard</h1>
        <span class="badge badge-primary">Total de servicios: {{ $servicesCount }}</span>
        <br>
        <span class="badge badge-primary">Servicio con el precio más bajo: {{ $serviceLowPrice->name }}
            {{ $serviceLowPrice->price }}</span>
        </span>
        <br>
        <span class="badge badge-primary">Cantidad de vehículos rojos: {{ $redCarsCount }}</span>
        <br>
        <span class="badge badge-primary">Servicio más usado: {{ $serviceMostUsed->name }}</span>
    </div>
    @include('footer')
</body>
</html>
