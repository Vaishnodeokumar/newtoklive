<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/script/users.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="mb-2">
</div>

<div class="card">
    <div class="card-header d-flex align-items-center border-bottom">
        <h4 class="card-title mb-0 header-title">
            <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active show" id="v-pills-users-tab" data-bs-toggle="pill" href="#v-pills-users" role="tab" aria-controls="v-pills-users"
                aria-selected="false">
                <span class="d-md-block"><?php echo e(__('All')); ?></span>
                 </a>
                <a class="nav-link " id="v-pills-moderator-tab" data-bs-toggle="pill" href="#v-pills-moderator" role="tab" aria-controls="v-pills-moderator"
                    aria-selected="true">
                    <span class="d-md-block"><?php echo e(__('Moderators')); ?></span>
                </a>
                <a class="nav-link " id="v-pills-dummy-tab" data-bs-toggle="pill" href="#v-pills-dummy" role="tab" aria-controls="v-pills-dummy"
                    aria-selected="true">
                    <span class="d-md-block"><?php echo e(__('Dummy')); ?></span>
                </a>
            </div>
        </h4>
        <a href="<?php echo e(url('createDummyUser')); ?>" class="btn btn-dark ms-auto"><?php echo e(__('Create Dummy User')); ?></a>
    </div>
    <div class="card-body">
        <div class="tab-content mt-3" id="v-pills-tabContent">
             
             <div class="tab-pane fade active show" id="v-pills-users" role="tabpanel" aria-labelledby="v-pills-users-tab">
                <div class="table-responsive">
                    <table id="usersTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3">
                        <thead class="table-light">
                            <tr>
                                <th><?php echo e(__('Profile')); ?></th>
                                <th><?php echo e(__('Real/Dummy')); ?></th>
                                <th><?php echo e(__('Identity')); ?></th>
                                <th><?php echo e(__('Freeze')); ?></th>
                                <th><?php echo e(__('Moderator')); ?></th>
                                <th style="width: 200px;" class="text-end"><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            
            <div class="tab-pane fade " id="v-pills-moderator" role="tabpanel" aria-labelledby="v-pills-moderator-tab">
                <div class="table-responsive">
                    <table id="moderatorsTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3">
                        <thead class="table-light">
                            <tr>
                                <th><?php echo e(__('Profile')); ?></th>
                                <th><?php echo e(__('Real/Fake')); ?></th>
                                <th><?php echo e(__('Identity')); ?></th>
                                <th><?php echo e(__('Freeze')); ?></th>
                                <th><?php echo e(__('Moderator')); ?></th>
                                <th style="width: 200px;" class="text-end"><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            
            <div class="tab-pane fade " id="v-pills-dummy" role="tabpanel" aria-labelledby="v-pills-dummy-tab">
                <div class="table-responsive">
                    <table id="dummyUserTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3">
                        <thead class="table-light">
                            <tr>
                                <th><?php echo e(__('Profile')); ?></th>
                                <th><?php echo e(__('Identity & Password')); ?></th>
                                <th><?php echo e(__('Freeze')); ?></th>
                                <th><?php echo e(__('Moderator')); ?></th>
                                <th style="width: 200px;" class="text-end"><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div> <!-- end tab-content-->
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shortzz_new\resources\views/users.blade.php ENDPATH**/ ?>