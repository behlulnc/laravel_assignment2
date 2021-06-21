

<?php $__env->startSection('content'); ?>
<br>
    <div class="row">
        <div class="col-lg-11">
            <h2>Add New Departments</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="<?php echo e(route('departments.list')); ?>"> Back</a>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('departments.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Department Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Department Name" name="name">
        </div>
  
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel_assignment\resources\views/departments/create.blade.php ENDPATH**/ ?>