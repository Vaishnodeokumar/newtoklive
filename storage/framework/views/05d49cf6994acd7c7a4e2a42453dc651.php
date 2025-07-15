<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/script/coinPackages.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="mb-2">
</div>

<div class="card">
    <div class="card-header d-flex align-items-center border-bottom">
        <h4 class="card-title mb-0 header-title">
            <?php echo e(__('Coin Packages')); ?>

        </h4>
        <a data-bs-toggle="modal" data-bs-target="#addPackageModal" class="btn btn-dark ms-auto"><?php echo e(__('Add')); ?></a>
    </a>
    </div>
    <div class="card-body">
        <span class="fs-6">*Price is for reference only. Actual price will be fetched from Google/Apple stores in the app based on users location.</span>
        <div class="table-responsive mt-2">
            <table id="coinPackagesTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3" >
                <thead class="table-light">
                    <tr>
                        <th><?php echo e(__('Image')); ?></th>
                        <th><?php echo e(__('Coin Amount')); ?></th>
                        <th><?php echo e(__('Price')); ?></th>
                        <th><?php echo e(__('Status')); ?></th>
                        <th><?php echo e(__('PlayStore Product Id')); ?></th>
                        <th><?php echo e(__('AppStore Product Id')); ?></th>
                        <th style="width: 200px;" class="text-end"><?php echo e(__('Action')); ?></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>


<div id="addPackageModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('Add Package')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form id="addCoinPackageForm" method="POST">
                <div class="modal-body">
                    <img id="imgAddCoinPackPreview" src="<?php echo e(url('assets/img/placeholder.png')); ?>" alt="" class="rounded" height="100" width="100">
                    <div class="my-2">
                        <label for="image" class="form-label"><?php echo e(__('Image')); ?></label>
                        <input id="inputAddCoinPackImage" class="form-control" type="file" accept="image/*" min="1" id="image" name="image" required>
                    </div>
                    <div class="mb-2">
                        <label for="coin_amount" class="form-label"><?php echo e(__('Coin Amount')); ?></label>
                        <input class="form-control" type="number" min="1" id="coin_amount" name="coin_amount" required>
                    </div>
                    <div class="">
                        <label for="coin_plan_price" class="form-label"><?php echo e(__('Price')); ?></label>
                        <input class="form-control" type="number" min="1" step="any" id="coin_plan_price" name="coin_plan_price" required>
                    </div>
                    <span class="fs-6">*Price is for reference only. Actual price will be fetched from Google/Apple stores in the app based on users location.</span>
                    <div class="my-2">
                        <label for="playstore_product_id" class="form-label"><?php echo e(__('PlayStore Product Id')); ?></label>
                        <input class="form-control" type="text" id="playstore_product_id" name="playstore_product_id" required>
                    </div>
                    <div class="mb-2">
                        <label for="appstore_product_id" class="form-label"><?php echo e(__('AppStore Product Id')); ?></label>
                        <input class="form-control" type="text" id="appstore_product_id" name="appstore_product_id" required>
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

<div id="editPackageModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('Edit Package')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form id="editCoinPackageForm" method="POST">
                <input type="hidden" name="id" id="editCoinPackageId">
                <div class="modal-body">
                    <img id="imgEditCoinPackPreview" src="<?php echo e(url('assets/img/placeholder.png')); ?>" alt="" class="rounded" height="100" width="100">
                    <div class="my-2">
                        <label for="image" class="form-label"><?php echo e(__('Image')); ?></label>
                        <input id="inputEditCoinPackImage" class="form-control" type="file" accept="image/*" min="1" name="image">
                    </div>
                    <div class="mb-2">
                        <label for="coin_amount" class="form-label"><?php echo e(__('Coin Amount')); ?></label>
                        <input class="form-control" type="number" min="1" id="edit_coin_amount" name="coin_amount" required>
                    </div>
                    <div class="">
                        <label for="coin_plan_price" class="form-label"><?php echo e(__('Price')); ?></label>
                        <input class="form-control" type="number" min="1" step="any" id="edit_coin_plan_price" name="coin_plan_price" required>
                    </div>
                    <span class="fs-6">*Price is for reference only. Actual price will be fetched from Google/Apple stores in the app based on users location.</span>
                    <div class="my-2">
                        <label for="playstore_product_id" class="form-label"><?php echo e(__('PlayStore Product Id')); ?></label>
                        <input class="form-control" type="text" id="edit_playstore_product_id" name="playstore_product_id" required>
                    </div>
                    <div class="mb-2">
                        <label for="appstore_product_id" class="form-label"><?php echo e(__('AppStore Product Id')); ?></label>
                        <input class="form-control" type="text" id="edit_appstore_product_id" name="appstore_product_id" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                    <button type="submit" class="btn btn-primary">
                        <span class="spinner-border spinner-border-sm me-1 spinner hide" role="status" aria-hidden="true"></span>
                        <?php echo e(__('Submit')); ?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shortzz_new\resources\views/coinPackages.blade.php ENDPATH**/ ?>