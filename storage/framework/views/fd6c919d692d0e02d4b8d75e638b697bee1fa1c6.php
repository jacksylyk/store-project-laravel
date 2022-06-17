<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: <?php echo $__env->yieldContent('title'); ?></title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo e(route('index')); ?>">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Все товары</a></li>
                <li ><a href="<?php echo e(route('categories')); ?>">Категории</a>
                </li>
                <li ><a href="<?php echo e(route('basket')); ?>">В корзину</a></li>
                <li><a href="#">Сбросить проект в начальное состояние</a></li>
                <li><a href="#">en</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/currency/RUB">₽</a></li>
                        <li><a href="/currency/USD">$</a></li>
                        <li><a href="/currency/EUR">€</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login">Войти</a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">
<?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\store-project\resources\views/master.blade.php ENDPATH**/ ?>