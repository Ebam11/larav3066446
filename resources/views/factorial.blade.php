<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular Factorial</title>
</head>
<body>
    <h1>Calcular el factorial de un numero (1 al 10)</h1>
    <form method="POST" action="{{ route('factorial.calcular') }}">
        @csrf
        <input type="number" name="numero" min="1" max="10" required>
        <button type="submit">Calcular</button>
    </form>
    @if(isset($resultado))
        <div>
            <strong>El factorial de {{ $numero }} es: {{ $resultado }}</strong>
        </div>        
    @endif
    @if (isset($error))
        <div style="color: red;">{{ $error }}</div>
    @endif
</body>
</html>
