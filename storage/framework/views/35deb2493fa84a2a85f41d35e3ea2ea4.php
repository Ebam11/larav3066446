<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego: Adivina el número</title>
</head>
<body>
    <h1>Juego: Adivina el número (1 al 70)</h1>
    <form method="POST" action="<?php echo e(route('adivina.jugar')); ?>">
        <?php echo csrf_field(); ?>
        <label for="numero">Ingresa tu número:</label>
        <input type="number" min="1" max="70" name="numero" id="numero" required autofocus>
        <button type="submit">Intentar</button>
    </form>
    <?php if(isset($mensaje)): ?>
        <div style="margin-top:20px; color:blue;"><?php echo e($mensaje); ?></div>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\larav3066446\resources\views\adivina.blade.php ENDPATH**/ ?>