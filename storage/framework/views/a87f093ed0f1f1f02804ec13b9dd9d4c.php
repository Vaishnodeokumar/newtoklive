<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/script/restrictions.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header d-flex align-items-center border-bottom">
        <h4 class="card-title mb-0 header-title">
            <?php echo e(__('Restrictions')); ?>

        </h4>
        <a data-bs-toggle="modal" data-bs-target="#addUsernameModal" class="btn btn-dark ms-auto"><?php echo e(__('Add Username')); ?></a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3 mb-2 mb-sm-0 ">
                <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active show" id="v-pills-username-tab" data-bs-toggle="pill" href="#v-pills-username" role="tab" aria-controls="v-pills-username"
                    aria-selected="false">
                    <span class="d-md-block"><?php echo e(__('Username')); ?></span>
                     </a>
                </div>
            </div> <!-- end col-->

            <div class="col-sm-12">
                <div class="tab-content mt-3" id="v-pills-tabContent">
                     
                     <div class="tab-pane fade active show" id="v-pills-username" role="tabpanel" aria-labelledby="v-pills-username-tab">
                        <div class="table-responsive">
                            <table id="usernameTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3">
                                <thead class="table-light">
                                    <tr>
                                        <th><?php echo e(__('Username')); ?></th>
                                        <th style="width: 200px;" class="text-end"><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                </div> <!-- end tab-content-->
            </div> <!-- end col-->
        </div>
    </div>
</div>


<div id="editUsernameModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('Add Username')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form id="editUsernameForm" method="POST">
                <input type="hidden" name="id" id="editUsernameId">
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="username" class="form-label"><?php echo e(__('Username')); ?></label>
                        <input class="form-control" type="text" id="editUsername" name="username" required>
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

<div id="addUsernameModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('Add Username')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form id="addUsernameForm" method="POST">
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="username" class="form-label"><?php echo e(__('Usernames')); ?> (Comma Seprated)</label>
                        <input class="form-control" type="text" id="usernames" name="usernames" required>
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

<?php echo $__env->make('include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shortzz_new\resources\views/restrictions.blade.php ENDPATH**/ ?>