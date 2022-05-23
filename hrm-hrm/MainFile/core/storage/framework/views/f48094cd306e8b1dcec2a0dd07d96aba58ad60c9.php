

<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark m-text"><?php echo e(__('Attendance log')); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><?php echo e(__('admin')); ?></a></li>
                        <li class="breadcrumb-item active"><?php echo e(__('attendance')); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info"><?php echo e(__('Attendance Log')); ?></h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th><?php echo e(__('Date')); ?></th>
                                <th><?php echo e(__('User Name')); ?></th>
                                <th><?php echo e(__('In Time')); ?></th>
                                <th><?php echo e(__('Out Time')); ?></th>
                                <th><?php echo e(__('Worked Hours')); ?></th>
                                <th><?php echo e(__('Status (IN/OUT)')); ?></th>
                                <th><?php echo e(__('IP')); ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $attendance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $atd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($atd->date); ?></td>
                                    <td><?php echo e($atd->name); ?></td>
                                    <td><?php echo e($atd->timein); ?></td>
                                    <td><?php echo e($atd->timeout); ?></td>
                                    <td><?php echo e($atd->workedhours); ?></td>

                                    <td>
                                        <?php if($atd->timein_status == 'late in'): ?>
                                            <p><?php echo e($atd->timein_status); ?></p>

                                        <?php else: ?>
                                            <p><?php echo e($atd->timein_status); ?></p>

                                            <?php endif; ?> / <?php if($atd->timeout_status == 'early out'): ?>
                                                <p><?php echo e($atd->timeout_status); ?></p>

                                            <?php else: ?>
                                                <p><?php echo e($atd->timeout_status); ?></p>

                                            <?php endif; ?>
                                    </td>
                                    <td><?php echo e($atd->timein_ip); ?> / <?php echo e($atd->timeout_ip); ?></td>
                                </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>

    <style>
        @media (max-width: 575.98px) {
            .mbl-flex {
                flex-direction: column !important;
            }

            .m-text {
                font-size: 1.5rem;
            }
        }

    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.admin-layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\hrm-hrm-payroll\MainFile\core\resources\views/admin/attendance/index.blade.php ENDPATH**/ ?>