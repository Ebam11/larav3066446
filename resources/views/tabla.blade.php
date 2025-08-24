<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla</title>
</head>
<body>
    <h1>Tabla de multiplicar</h1>
    <form method="POST" action="{{ route('tabla.procesar') }}">
        @csrf
        <label for="numero">Ingrese un número (1 al 10):</label>
        <input type="number" name="numero" id="numero" min="1" max="10" required>
        <button type="submit">Generar Tabla</button>
    </form>

    @if (isset($tabla))
        <h2>Tabla del {{ $numero }}</h2>
        <ul>
            @foreach ($tabla as $i => $resultado)
                <li>{{ $numero }} x {{ $i }} = {{ $resultado }}</li>
            @endforeach
        </ul>
    @endif

    @if (isset($error))
        <div style="color: red;">{{ $error }}</div>
    @endif
</body>
</html>
