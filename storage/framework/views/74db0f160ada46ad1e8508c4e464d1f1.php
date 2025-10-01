<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Listar categorías</h1>

    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <br>
        <td><?php echo e($category->name); ?></td><br>
        <td><?php echo e($category->urlImg); ?></td><br>
        <td> <iframe src="<?php echo e('http://localhost/larav3066446/public/storage/public/images/'.$category->urlImg); ?>" frameborder="0"></iframe></td>
        <td><a href="<?php echo e(route('categories.show',$category->id)); ?>">Mostrar</a></td>
        <td><a href="<?php echo e(route('categories.edit',$category->id)); ?>">Editar</a></td>
         <form action="<?php echo e(route('categories.destroy',$category->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
          <button type="submit">Eliminar</button>
        </form>

        <br>

    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\larav3066446\resources\views/categories/index.blade.php ENDPATH**/ ?>