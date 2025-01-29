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

    <div class="container mt-5">
        <div class="text-center">
            <form action="{{ route('services.update', $service->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nombre del servicio</label>
                    <input type="text" name="name" id="name" value="{{ $service->name }}" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Descripción del servicio</label>
                    <input type="text" name="description" id="description" value="{{ $service->description }}" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="number" name="price" id="price" value="{{ $service->price }}" required class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Editar servicio</button>
                <a href="{{ route('services.index') }}" class="btn btn-primary">Atrás</a>
            </form>
        </div>
    </div>

</body>

</html>
