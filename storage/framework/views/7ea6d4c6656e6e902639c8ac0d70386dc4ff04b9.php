<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">


        </div>
        <img src="/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
        <div class="caption">
            <h3><?php echo e($product->name); ?></h3>
            <p><?php echo e($product -> price); ?> ₽</p>
            <p>
            <form action="<?php echo e(route('basket-add', $product)); ?>" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="<?php echo e(route('product', [$product->category->code, $product->code])); ?>" class="btn btn-default" role="button">Подробнее</a>
                <?php echo csrf_field(); ?>

            </form>
            </p>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\store-project\resources\views/card.blade.php ENDPATH**/ ?>