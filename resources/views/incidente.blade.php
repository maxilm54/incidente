<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reportar Incidencia</title>
</head>
<body>
    <h1>Reporte Incidencia</h1>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>                
            @endforeach
        </ul>
    </div>        
    @endif
    <form action="/incidente" method="post">
        @csrf
        <div>
            <label for="cliente">Cliente</label>
            <input type="text" id="cliente" name="cliente" value="{{$cliente->nombre}}" readonly>
            <input type="hidden" name="cliente_id" value="{{$cliente->id}}">            
        </div>
        <div>
            <label for="incidente">Incidente</label>
            <input type="text" id="incidente" name="incidente" required>
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <button type="submit">Reportar</button>
        </div>
    </form>
</body>
</html>