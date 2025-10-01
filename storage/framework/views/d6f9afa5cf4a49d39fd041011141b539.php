<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla</title>
</head>
<body>
    <h1>Tabla de multiplicar</h1>
    <form method="POST" action="<?php echo e(route('tabla.procesar')); ?>">
        <?php echo csrf_field(); ?>
        <label for="numero">Ingrese un número (1 al 10):</label>
        <input type="number" name="numero" id="numero" min="1" max="10" required>
        <button type="submit">Generar Tabla</button>
    </form>

    <?php if(isset($tabla)): ?>
        <h2>Tabla del <?php echo e($numero); ?></h2>
        <ul>
            <?php $__currentLoopData = $tabla; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $resultado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($numero); ?> x <?php echo e($i); ?> = <?php echo e($resultado); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

    <?php if(isset($error)): ?>
        <div style="color: red;"><?php echo e($error); ?></div>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\larav3066446\resources\views\tabla.blade.php ENDPATH**/ ?>