<?php $__env->startSection('title', 'Корзина'); ?>

<?php $__env->startSection('content'); ?>
        <p class="alert alert-warning">Удален товар iPhone X 64GB</p>
        <h1>Корзина</h1>
        <p>Оформление заказа</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <a href="<?php echo e(route('product', [$product->category->code, $product->code])); ?>">
                                <img height="56px" src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
                                <?php echo e($product->name); ?>

                            </a>
                        </td>
                        <td><span class="badge"><?php echo e($product->pivot->count); ?></span>
                            <div class="btn-group form-inline">
                                <form action="<?php echo e(route('basket-remove', $product)); ?>" method="POST">
                                    <button type="submit" class="btn btn-danger" href=""><span
                                            class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                    <?php echo csrf_field(); ?>
                                </form>
                                <form action="<?php echo e(route('basket-add', $product)); ?>" method="POST">
                                    <button type="submit" class="btn btn-success" href="">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                    </button>
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </td>
                        <td><?php echo e($product->price); ?> ₽</td>
                        <td><?php echo e($product->getPriceForCount()); ?> ₽</td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td colspan="3">Общая стоимость:</td>
                    <td><?php echo e($order->getFullPrice()); ?></td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success" href="<?php echo e(route('basket-place')); ?>">Оформить заказ</a>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\store-project\resources\views/basket.blade.php ENDPATH**/ ?>