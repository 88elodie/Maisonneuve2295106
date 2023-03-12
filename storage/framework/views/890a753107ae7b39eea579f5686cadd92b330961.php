<?php $__env->startSection('title', 'Edit Student'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
<div class="card">
<form  method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="card-header">
                            <h2>Edit the student</h2>
                        </div>
                        <div class="card-body">   
                                <div class="control-group col-12">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control" value="<?php echo e($student->name); ?>">
                                </div>
                                <div class="control-group col-12">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" name="address" class="form-control" value="<?php echo e($student->address); ?>">
                                </div>
                                <div class="control-group col-12">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo e($student->phone); ?>">
                                </div>
                                <div class="control-group col-12">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" name="email" class="form-control" value="<?php echo e($student->email); ?>">
                                </div>
                                <div class="control-group col-12">
                                    <label for="DOB">Date of birth</label>
                                    <input type="date" id="DOB" name="DOB" class="form-control" value="<?php echo e($student->DOB); ?>">
                                </div>
                                    <label for="city_id">City</label>
                                    <select class="form-select" name="city_id" id="city_id">
                                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($city->city_id); ?>"
                                        <?php if($city->city_id == $student->city_id): ?>
                                        selected
                                        <?php endif; ?>
                                        ><?php echo e($city->city_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Save Changes">
                            <button class="btn btn-secondary"><a href="<?php echo e(route('student.show', $student->id)); ?>">Cancel</a></button>
                        </div>
                    </form>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elodie/Desktop/laravel/Maisonneuve2295106/resources/views/student/edit.blade.php ENDPATH**/ ?>