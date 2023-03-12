<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name')); ?> - <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('/css/app.css')); ?>">
    <style>
        body{
            background-color: beige;
        }

        .card{
            background-color: rgba(0,0,0,0.05);
        }

        .list-group-item{
            background-color: transparent;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a href="/" class="navbar-brand">home</a>
        
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="<?php echo e(route('student.index')); ?>" class="nav-link">student list</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('student.create')); ?>" class="nav-link">add student</a>
            </li>
        </ul>
        </div>
    </nav>
    <?php echo $__env->yieldContent('content'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH /Users/elodie/Desktop/laravel/Maisonneuve2295106/resources/views////layouts/app.blade.php ENDPATH**/ ?>