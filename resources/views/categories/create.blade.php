<!DOCTYPE html>
<html>
<head>
    <title>Crear Categoría</title>
</head>
<body>
    <h1>Crear Nueva Categoría</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre de la Categoría:</label>
        <input type="text" name="nombre" id="nombre" required>
        <button type="submit">Guardar Categoría</button>
        <a href="{{ route('categories.index') }}">Cancelar</a>
    </form>

    <h3>Categorías sugeridas:</h3>
    <ul>
        <li>Arte</li>
        <li>Deporte</li>
        <li>Tecnología</li>
        <li>Pintura</li>
        <li>Dibujo</li>
    </ul>
</body>
</html>
