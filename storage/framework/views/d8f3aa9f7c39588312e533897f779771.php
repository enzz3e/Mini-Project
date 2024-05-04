<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>List Barang</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/style.css'); ?>
</head>

<body>
    <div class="container-fluid app-sidebar">
        <div class="row">
          <div class="col-2 pt-5 nav">
                <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
          <div class="col-10 pt-5">
                <?php echo $__env->yieldContent('content'); ?>
          </div>
        </div>
      </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\rizqi_f\masterBarangUts\resources\views/layouts/app.blade.php ENDPATH**/ ?>