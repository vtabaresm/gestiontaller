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
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="car_id">Seleccione un vehículo</label>
                    <select 

                    </select>
                </div>
                <div class="form-group">
                    <label for="service_id">Seleccione un servicio</label>
                    <select name="service_id" id="service_id" class="form-control" required>
                        <option value="">Seleccione</option>
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    

                </div>
                <button type="submit" class="btn btn-success">Agendar servicio</button>
            </form>
        </div>
        <div class="mt-5">
            <h2>Lista de citas</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Fecha y hora</th>
                        <th>Vehículo</th>
                        <th>Servicio</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

        </div>
    </div>
    @include('footer')
</body>

</html>
