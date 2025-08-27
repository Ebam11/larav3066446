<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Categoría</title>
</head>
<body>

    <h1>Crea Una Nueva Categoría</h1>

    <form method="POST" action="{{ route('categories.store') }}">
    @csrf
    <label for="name">Ingrese el nombre de la categoria:</label>
    <input type="text" name="name">
    <button type="submit">Guardar</button>
</form>

</body>
</html>
