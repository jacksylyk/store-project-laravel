<?php $__env->startSection('title', 'Оформить заказ'); ?>

<?php $__env->startSection('content'); ?>
        <h1>Подтвердите заказ:</h1>
        <div class="container">
            <div class="row justify-content-center">
                <p>Общая стоимость: <b> <?php echo e($order->getFullPrice()); ?> ₽.</b></p>
                <form action="<?php echo e(route('basket-confirm')); ?>" method="POST">
                    <div>
                        <p>Укажите свои имя и номер телефона, чтобы наш менеджер мог с вами связаться:</p>

                        <div class="container">
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Имя: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="name" id="name" value="" class="form-control">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Номер
                                    телефона: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="phone" id="phone" value="" class="form-control">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Email: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="email" id="email" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <?php echo csrf_field(); ?>
                        <input type="submit" class="btn btn-success" value="Подтвердите заказ">
                    </div>
                </form>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\store-project\resources\views/order.blade.php ENDPATH**/ ?>