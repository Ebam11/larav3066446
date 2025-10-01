<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Crear Categoria</h1>

    <form action="<?php echo e(route('categories.store')); ?>" method="POST" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>Adjuntar la Imagen</label>
        <br>
        <input type="file" name="urlImg" class="form-control-file" accept="image/*">
        <br><br>
        <button type="submit">Registrar Categoria</button>
    </form>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\larav3066446\resources\views/categories/create.blade.php ENDPATH**/ ?>