

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-11">
                <h2>Laravel Assignment (Customers ) </h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="<?php echo e(route('customers.list')); ?>"> Back</a>
        </div>
    </div>
<hr />
 <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route('customers.list')); ?>">Customers List</a>            
            <a class="btn btn-success" href="<?php echo e(route('customers.create')); ?>">Customers Add</a>
            <a class="btn btn-success" href="<?php echo e(route('departments.list')); ?>">Departments List</a> 
            <a class="btn btn-success" href="<?php echo e(route('departments.create')); ?>">Departments Add</a>
        </div>
<hr />



    <table class="table table-bordered">
        <tr>
            <th> Name:</th>
            <td><?php echo e($customer->name); ?></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><?php echo e($customer->email); ?></td>
        </tr>
        <tr>
            <th>GSM NO:</th>
            <td><?php echo e($customer->gsm_no); ?></td>
        </tr>

    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel_assignment\resources\views/customers/view.blade.php ENDPATH**/ ?>