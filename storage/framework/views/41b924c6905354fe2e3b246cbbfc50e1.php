<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/script/notifications.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="mb-2">
</div>

<div class="card">
    <div class="card-header d-flex align-items-center border-bottom">
        <h4 class="card-title mb-0 header-title">
            <?php echo e(__('Notifications')); ?>

        </h4>
        <a data-bs-toggle="modal" data-bs-target="#addNotificationModal" class="btn btn-dark ms-auto"><?php echo e(__('New Notification')); ?></a>
    </a>
    </div>
    <div class="card-body">
        <span class="fs-6">*This is a common notification which will pushed to all users and can see in the app.</span>
        <div class="table-responsive mt-2">
            <table id="notificationTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3" >
                <thead class="table-light">
                    <tr>
                        <th><?php echo e(__('Notification')); ?></th>
                        <th><?php echo e(__('Date')); ?></th>
                        <th style="width: 200px;" class="text-end"><?php echo e(__('Action')); ?></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>


<div id="addNotificationModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('Add Notification')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form id="addAdminNotificationForm" method="POST">
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="image" class="form-label"><?php echo e(__('Image')); ?></label>
                        <input class="form-control" type="file" accept="image/*" min="1" id="image" name="image">
                    </div>
                    <div class="my-2">
                        <label for="title" class="form-label"><?php echo e(__('Title')); ?></label>
                        <input class="form-control" type="text" id="title" name="title" required>
                    </div>
                    <div class="mb-2">
                        <label for="description" class="form-label"><?php echo e(__('Description')); ?></label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                    <button type="submit" class="btn btn-primary">
                        <span class="spinner-border spinner-border-sm me-1 spinner hide" role="status" aria-hidden="true"></span>
                        <?php echo e(__('Save')); ?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="editNotificationModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('Edit Notification')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form id="editAdminNotificationForm" method="POST">
                <input type="hidden" name="id" id="editId">
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="image" class="form-label"><?php echo e(__('Image')); ?></label>
                        <input class="form-control" type="file" accept="image/*" min="1" name="image">
                    </div>
                    <div class="my-2">
                        <label for="title" class="form-label"><?php echo e(__('Title')); ?></label>
                        <input class="form-control" type="text" id="edit_title" name="title" required>
                    </div>
                    <div class="mb-2">
                        <label for="description" class="form-label"><?php echo e(__('Description')); ?></label>
                        <textarea rows="10" class="form-control" id="edit_description" name="description" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                    <button type="submit" class="btn btn-primary">
                        <span class="spinner-border spinner-border-sm me-1 spinner hide" role="status" aria-hidden="true"></span>
                        <?php echo e(__('Save')); ?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shortzz_new\resources\views/notifications.blade.php ENDPATH**/ ?>