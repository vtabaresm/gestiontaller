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
            <form action="" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                </div>
                <div class="form-group">
                    <label for="brand">Marca</label>
                    <input type="text" name="brand" id="brand" value="{{ $car->brand }}" required class="form-control">
                </div>
                <div class="form-group">
                </div>
                <div class="form-group">
                </div>
                <button type="submit" class="btn btn-success">Editar venhículo</button>
                <a href="{{ route('cars.index') }}" class="btn btn-primary">Atrás</a>
            </form>
        </div>
    </div>
    @include('footer')
</body>

</html>
