

<?php $__env->startSection('content'); ?>
<br>
    <div class="row">
        <div class="col-lg-11">
                <h2>Laravel 8  Example</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="<?php echo e(route('student.create')); ?>">Add</a>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Adddress</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($student->id); ?></td>
                <td><?php echo e($student->first_name); ?></td>
                <td><?php echo e($student->last_name); ?></td>
                <td><?php echo e($student->address); ?></td>
                <td>
                    <form action="<?php echo e(route('student.destroy',['id'=>$student->id])); ?>"  method="POST"onsubmit="return confirm('Are you sure you want to unenroll?');" style="display: inline-block;">
                        <a class="btn btn-info btn-sm" href="<?php echo e(route('student.show',$student->id)); ?>">Show</a>
                        <a class="btn btn-primary btn-sm" href="<?php echo e(route('student.edit',$student->id)); ?>">Edit</a>
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
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel_assignment\resources\views/list.blade.php ENDPATH**/ ?>