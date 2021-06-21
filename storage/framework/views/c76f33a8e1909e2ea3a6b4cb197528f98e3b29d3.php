


<?php $__env->startSection('content'); ?>
<br>
    <div class="row">
        <div class="col-lg-11">
                <h2>Laravel Assignment</h2>
        </div>
        <hr />
           <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route('customers.list')); ?>">Customers List</a>            
            <a class="btn btn-success" href="<?php echo e(route('customers.create')); ?>">Customers Add</a>
            <a class="btn btn-success" href="<?php echo e(route('departments.list')); ?>">Departments List</a> 
            <a class="btn btn-success" href="<?php echo e(route('departments.create')); ?>">Departments Add</a>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

<hr />
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th> GSM NO </th>
                <th> Department ID </th>
             
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($customer->id); ?></td>
                <td><?php echo e($customer->name); ?></td>
                <td><?php echo e($customer->email); ?></td>
                <td><?php echo e($customer->gsm_no); ?></td>
                <td><?php echo e($customer->department_id); ?></td>
                
                <td>
                    <form action="<?php echo e(route('customers.destroy',['id'=>$customer->id])); ?>"  method="POST"onsubmit="return confirm('Are you sure you want to unenroll?');" style="display: inline-block;">
                        <a class="btn btn-info btn-sm" href="<?php echo e(route('customers.show',$customer->id)); ?>">Show</a>
                        <a class="btn btn-primary btn-sm" href="<?php echo e(route('customers.edit',$customer->id)); ?>">Edit</a>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel_assignment\resources\views/customers/list.blade.php ENDPATH**/ ?>