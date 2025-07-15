<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/script/dummyLives.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="mb-2">
</div>

<div class="card">
    <div class="card-header d-flex align-items-center border-bottom">
        <h4 class="card-title mb-0 header-title">
            <?php echo e(__('Dummy Lives')); ?>

        </h4>
        <a data-bs-toggle="modal" data-bs-target="#addDummyLiveModal" class="btn btn-dark ms-auto"><?php echo e(__('Add')); ?></a>
    </a>
    </div>
    <div class="card-body">
        <span class="fs-6">*Make sure to add links which points directly to video files. Embedded links will not work.</span><br>
        <span class="fs-6">*Links should end with .mp4 or .m3u8</span>
        <div class="table-responsive mt-2">
            <table id="dummyLivesTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3" >
                <thead class="table-light">
                    <tr>
                        <th><?php echo e(__('User')); ?></th>
                        <th><?php echo e(__('Title')); ?></th>
                        <th><?php echo e(__('Video')); ?></th>
                        <th><?php echo e(__('Status')); ?></th>
                        <th style="width: 200px;" class="text-end"><?php echo e(__('Action')); ?></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>


<div id="addDummyLiveModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('Add Dummy Live')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form id="addDummyLiveForm" method="POST">
                <div class="modal-body">
                    <div class="my-2">
                        <label for="title" class="form-label"><?php echo e(__('Select Dummy User')); ?></label>
                        <select name="user_id" id="" class="form-control select2 remove-searchbar" data-toggle="select2" required>
                            <option selected disabled><?php echo e(__('Select Dummy User')); ?></option>
                            <?php $__currentLoopData = $dummyUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($user->id); ?>"><?php echo e($user->fullname); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="my-2">
                        <label for="title" class="form-label"><?php echo e(__('Title')); ?></label>
                        <input class="form-control" type="text" id="title" name="title" required>
                    </div>
                    <span class="fs-6">*Make sure to add links which points directly to video files. Embedded links will not work.</span><br>
                    <span class="fs-6">*Links should end with .mp4 or .m3u8</span>
                    <div class="mb-2">
                        <label for="link" class="form-label"><?php echo e(__('Link')); ?></label>
                        <input class="form-control" type="text" id="link" name="link" required>
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

<div id="editDummyLiveModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('Edit Dummy Live')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form id="editDummyLiveForm" method="POST">
                <input type="hidden" name="id" id="editDummyLiveId">
                <div class="modal-body">
                    <div class="my-2">
                        <label for="title" class="form-label"><?php echo e(__('Title')); ?></label>
                        <input class="form-control" type="text" id="edit_dummy_live_title" name="title" required>
                    </div>
                    <span class="fs-6">*Make sure to add links which points directly to video files. Embedded links will not work.</span><br>
                    <span class="fs-6">*Links should end with .mp4 or .m3u8</span>
                    <div class="mb-2">
                        <label for="link" class="form-label"><?php echo e(__('Link')); ?></label>
                        <input class="form-control" type="text" id="edit_dummy_live_link" name="link" required>
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

<?php echo $__env->make('include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shortzz_new\resources\views/dummyLives.blade.php ENDPATH**/ ?>