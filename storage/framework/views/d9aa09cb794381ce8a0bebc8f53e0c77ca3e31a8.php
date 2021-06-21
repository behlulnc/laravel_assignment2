

<?php $__env->startSection('content'); ?>
<br>
    <div class="row">
        <div class="col-lg-11">
            <h2>Add New Customer</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="<?php echo e(route('customers.list')); ?>"> Back</a>
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

    <form action="<?php echo e(route('customers.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name"> Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
        </div>
        <div class="form-group">
            <label for="gsm_no">GSM NO:</label>
   
              <input type="text" class="form-control" id="gsm_no" name="gsm_no" placeholder="Enter GSM NO" name="email">
            
        </div>
        <label for="department_id">Choose a Department:</label>
 <div class="form-group">
<select id="department_id" name= "department_id"   class="form-control">
  <option value="0">Choose</option>
  <option value="1">Muhasebe</option>
  <option value="2">Pazarlama</option>
</select>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel_assignment\resources\views/customers/create.blade.php ENDPATH**/ ?>