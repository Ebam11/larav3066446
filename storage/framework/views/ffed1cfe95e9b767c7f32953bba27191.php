<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular Factorial</title>
</head>
<body>
    <h1>Calcular el factorial de un numero (1 al 10)</h1>
    <form method="POST" action="<?php echo e(route('factorial.calcular')); ?>">
        <?php echo csrf_field(); ?>
        <input type="number" name="numero" min="1" max="10" required>
        <button type="submit">Calcular</button>
    </form>
    <?php if(isset($resultado)): ?>
        <div>
            <strong>El factorial de <?php echo e($numero); ?> es: <?php echo e($resultado); ?></strong>
        </div>        
    <?php endif; ?>
    <?php if(isset($error)): ?>
        <div style="color: red;"><?php echo e($error); ?></div>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\larav3066446\resources\views\factorial.blade.php ENDPATH**/ ?>