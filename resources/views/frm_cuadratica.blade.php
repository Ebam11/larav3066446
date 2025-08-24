<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Ecuación Cuadrática</title>
</head>
<body>
    <h1>Formulario para resolver ecuación cuadrática</h1>
    <form method="POST" action="{{ route('cuadratica.calcular') }}">
        @csrf
        <label for="a">a:</label>
        <input type="number" name="a" id="a" step="any" required>
        <label for="b">b:</label>
        <input type="number" name="b" id="b" step="any" required>
        <label for="c">c:</label>
        <input type="number" name="c" id="c" step="any" required>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
