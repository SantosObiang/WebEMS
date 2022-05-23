

<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-white"><?php echo e(__('Change Copyright')); ?></h6>
        </div>
        <div class="card-body">

            <br>

            <?php if(session()->has('success')): ?>
            <div class="alert alert-success">
              <?php echo e(__('Copyright Changed')); ?>

            </div>

            <?php endif; ?>

            <form action="<?php echo e(route('copyright.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>


            <div class="form-group">
                <label for="image"><?php echo e(__('Add Copyright')); ?></label>
                <input type="text" name="name" class="form-control" required value="<?php echo e(@$copy->name); ?>">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="add">
              </div>
            </form>

        </div>
    </div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin-layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\hrm-hrm-payroll\MainFile\core\resources\views/admin/copyright/index.blade.php ENDPATH**/ ?>