<?php $__env->startSection('title', 'Категория: '.$category->name); ?>

<?php $__env->startSection('content'); ?>

        <h1>
            <?php echo e($category -> name); ?>

        </h1>
        <p>
            <?php echo e($category -> description); ?>

        </p>
        <div class="row">
            <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('layouts.card', compact('product'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\store-project\resources\views/category.blade.php ENDPATH**/ ?>