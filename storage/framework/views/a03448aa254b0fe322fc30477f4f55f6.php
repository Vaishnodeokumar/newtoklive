<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/script/hashtags.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="mb-2">
</div>

<div class="card">
    <div class="card-header d-flex align-items-center border-bottom">
        <h4 class="card-title mb-0 header-title">
            <?php echo e(__('Hashtags')); ?>

        </h4>
        <a data-bs-toggle="modal" data-bs-target="#addHashtagModal" class="btn btn-dark ms-auto"><?php echo e(__('Add Hashtag')); ?></a>
    </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="hashtagsTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3" >
                <thead class="table-light">
                    <tr>
                        <th><?php echo e(__('Hashtag')); ?></th>
                        <th><?php echo e(__('Post Count')); ?></th>
                        <th style="width: 200px;" class="text-end"><?php echo e(__('Action')); ?></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>


<div id="addHashtagModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('Add Hashtag')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form id="addHashtagForm" method="POST">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="hashtag" class="form-label"><?php echo e(__('Hashtag')); ?></label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="basic-addon1">#</span>
                            <input type="text" id="hashtag" name="hashtag" class="form-control" placeholder="Hashtag" aria-label="Hashtag" aria-describedby="basic-addon1"  pattern="[^@#]*"  required>
                        </div>
                        <span class="fs-6">* Do not include (#,@) symbol</span>
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

<?php echo $__env->make('include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shortzz_new\resources\views/hashtags.blade.php ENDPATH**/ ?>