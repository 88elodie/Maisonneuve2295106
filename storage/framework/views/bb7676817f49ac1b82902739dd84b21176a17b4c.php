<?php $__env->startSection('title', 'Student List'); ?>
<?php $__env->startSection('content'); ?>

<h2 class="display-6 m-3">Student List</h2>
<div class="container-fluid">
    <div class="row m-3">
        <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-sm-2">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($student->name); ?></h5>
                    <h6 class="card-subtitle text-muted"><?php echo e($student->DOB); ?></h6>
                    <p class="card-text">city : <?php echo e($student->city_name); ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="<?php echo e(route('student.show', $student->id)); ?>" class="card-link">View</a></li>
                    <li class="list-group-item"><a href="<?php echo e(route('student.edit', $student->id)); ?>" class="card-link">Edit</a></li>
                </ul>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>
    </div>
</div>
<div class="m-5">
<?php echo e($students); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elodie/Desktop/laravel/Maisonneuve2295106/resources/views/student/index.blade.php ENDPATH**/ ?>