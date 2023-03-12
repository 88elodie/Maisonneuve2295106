<?php $__env->startSection('title', 'Student'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
<div class="card">
<div class="card-body">
<h2><?php echo e($student->name); ?></h2>

<p>Date of birth : <?php echo e($student->DOB); ?></p>
<p>Email : <?php echo e($student->email); ?></p>
<p>Phone : <?php echo e($student->phone); ?></p>
<p>Address : <?php echo e($student->address); ?></p>


<!-- button -->
<button type="button" class="btn btn-primary"><a href="<?php echo e(route('student.edit', $student->id)); ?>">Edit</a></button>
<button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Deleting student</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Are you sure you want to delete this student ?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form id="delete-frm" class="" action="" method="POST">
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?>
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elodie/Desktop/laravel/Maisonneuve2295106/resources/views/student/show.blade.php ENDPATH**/ ?>