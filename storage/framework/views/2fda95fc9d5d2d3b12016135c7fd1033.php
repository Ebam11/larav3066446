<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Notas</title>
</head>
<body>
    <h1>Ingrese 5 notas (de 0 a 5)</h1>
    <form method="POST" action="<?php echo e(route('notas.procesar')); ?>">
        <?php echo csrf_field(); ?>
        <?php for($i = 1; $i <= 5; $i++): ?>
            <label>Nota <?php echo e($i); ?></label>
            <input type= "number" name="notas[]" min="0" max="5" step="0.01" required>
            <br>
        <?php endfor; ?>
        <button type="submit">Calcular</button>
    </form>
    <?php if(isset($error)): ?>
        <div style= "color:red;"><?php echo e($error); ?></div>
    <?php endif; ?>
    <?php if(isset($promedio)): ?>
        <div>
            <strong>El promedio es: <?php echo e($promedio); ?></strong><br>
            <strong><?php echo e($aprobado ? 'Aprobado' : 'Reprobado'); ?></strong><br>
            <strong>Intentos usados: <?php echo e($intentos); ?></strong>
        </div>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\larav3066446\resources\views\notas.blade.php ENDPATH**/ ?>