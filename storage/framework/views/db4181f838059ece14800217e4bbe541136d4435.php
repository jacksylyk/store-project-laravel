<?php $__env->startSection('title','Товар'); ?>

<?php $__env->startSection('content'); ?>
        <h1><?php echo e($product); ?></h1>
        <h2></h2>
        <p>Цена: <b>71990 ₽</b></p>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
        <p>Отличный продвинутый телефон с памятью на 64 gb</p>

        <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

            <input type="hidden" name="_token" value="jZTUZoTAC1fBVZOMrIGgb8dSfW6T0h66skOREOIi"></form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\store-project\resources\views/product.blade.php ENDPATH**/ ?>