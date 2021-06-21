

<?php $__env->startSection('content'); ?>
<br>
    <div class="row">
        <div class="col-lg-11">
            <h2>Update Customer</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="<?php echo e(route('customers.create')); ?>"> Back</a>
        </div>
        
        
           <hr />
           <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route('customers.list')); ?>">Customers List</a>            
            <a class="btn btn-success" href="<?php echo e(route('customers.create')); ?>">Customers Add</a>
            <a class="btn btn-success" href="<?php echo e(route('departments.list')); ?>">Departments List</a> 
            <a class="btn btn-success" href="<?php echo e(route('departments.create')); ?>">Departments Add</a>
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

    <hr />
    <form method="post" action="<?php echo e(route('customers.update',$customer->id)); ?>" >
        <?php echo method_field('PATCH'); ?>
        <?php echo csrf_field(); ?>
        <?php var_dump($customer->name); ?>
     aa--   <?php echo e($customer->name); ?>

        <div class="form-group">
            <label for="txtFirstName"> Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo e($customer->name); ?>">
        </div>
        <div class="form-group">
            <label for="txtLastName">Last Name:</label>
            <input type="text" class="form-control" id="txtLastName" placeholder="Enter Last Name" name="txtLastName" value="<?php echo e($customer->last_name); ?>">
        </div>
        <div class="form-group">
            <label for="txtAddress">Address:</label>
            <textarea class="form-control" id="txtAddress" name="txtAddress" rows="10" placeholder="Enter Address"><?php echo e($customer->address); ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel_assignment\resources\views/customers/edit.blade.php ENDPATH**/ ?>