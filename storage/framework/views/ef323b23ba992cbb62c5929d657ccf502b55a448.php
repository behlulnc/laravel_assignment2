

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-11">
                <h2>Laravel 8 </h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="<?php echo e(route('student.list')); ?>"> Back</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>First Name:</th>
            <td><?php echo e($student->first_name); ?></td>
        </tr>
        <tr>
            <th>Last Name:</th>
            <td><?php echo e($student->first_name); ?></td>
        </tr>
        <tr>
            <th>Address:</th>
            <td><?php echo e($student->address); ?></td>
        </tr>

    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel_assignment\resources\views/departments/view.blade.php ENDPATH**/ ?>