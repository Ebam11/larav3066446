<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Notas</title>
</head>
<body>
    <h1>Ingrese 5 notas (de 0 a 5)</h1>
    <form method="POST" action="{{ route('notas.procesar') }}">
        @csrf
        @for ($i = 1; $i <= 5; $i++)
            <label>Nota {{ $i }}</label>
            <input type= "number" name="notas[]" min="0" max="5" step="0.01" required>
            <br>
        @endfor
        <button type="submit">Calcular</button>
    </form>
    @if (isset($error))
        <div style= "color:red;">{{ $error }}</div>
    @endif
    @if (isset($promedio))
        <div>
            <strong>El promedio es: {{ $promedio }}</strong><br>
            <strong>{{$aprobado ? 'Aprobado' : 'Reprobado'}}</strong><br>
            <strong>Intentos usados: {{ $intentos }}</strong>
        </div>
    @endif
</body>
</html>
