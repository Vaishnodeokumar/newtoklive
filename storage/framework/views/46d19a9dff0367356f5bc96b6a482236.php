<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/script/createDummyUser.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header d-flex align-items-center border-bottom">
        <h4 class="card-title mb-0 header-title">
            <?php echo e(__('Create Dummy User')); ?>

        </h4>
    </a>
    </div>
    <div class="card-body">
        <span class="fs-6">*Dummy user profiles can be logged in to the app. Choose email/password log in option and enter username in email field & password.</span><br>
        <span class="fs-6">*Only dummy users can log in to the app with username & password. Other users can log in with email & password.</span>
        <form class="mt-2" id="createDummyUserForm" method="POST">
            <img id="img-profile" class="rounded-circle avatar-lg img-thumbnail object-fit-cover" src="<?php echo e(url('assets/img/placeholder.png')); ?>" alt="profile" width="100" height="100">
            <div class="row mt-3">
                <div class="col-md-3 mb-3">
                    <div class="mb-0 bg-secondary-lighten border p-2 rounded-3">
                        <label for="profile_photo" class="form-label"><?php echo e(__('Profile Photo')); ?></label>
                        <input type="file" id="profile_photo" name="profile_photo" class="form-control" accept="image/*" required>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="mb-0 bg-secondary-lighten border p-2 rounded-3">
                        <label for="fullname" class="form-label"><?php echo e(__('Fullname')); ?></label>
                        <input type="text" id="fullname" name="fullname" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="mb-0 bg-secondary-lighten border p-2 rounded-3">
                        <label for="username" class="form-label"><?php echo e(__('Username')); ?></label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="mb-0 bg-secondary-lighten border p-2 rounded-3">
                        <label for="password" class="form-label"><?php echo e(__('Password')); ?></label>
                        <input type="text" id="password" name="password" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="mb-0 bg-secondary-lighten border p-2 rounded-3">
                        <label for="bio" class="form-label"><?php echo e(__('Bio')); ?></label>
                        <textarea type="text" id="bio" name="bio" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="mb-0 bg-secondary-lighten border p-2 rounded-3">
                        <label for="" class="form-label"><?php echo e(__('Verified')); ?></label>
                        <div class="mb-0">
                            <input name="is_verify" type="checkbox" id="switchIsVerify" data-switch="primary"/>
                            <label for="switchIsVerify" ></label>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shortzz_new\resources\views/createDummyUser.blade.php ENDPATH**/ ?>