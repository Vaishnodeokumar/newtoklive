<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/script/editUser.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php
use App\Models\Constants;
use App\Models\GlobalFunction;

?>


<div class="card">
    <div class="card-header d-flex align-items-center border-bottom">
        <h4 class="card-title mb-0 header-title">
            <?php echo e(__('Edit User')); ?>

            <?php echo GlobalFunction::createUserTypeBadge($user->id); ?>

        </h4>
    </a>
    </div>
    <div class="card-body">
        <form class="" id="editUserForm" method="POST">
            <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
                <td class="p-0 border-0">
                <?php echo GlobalFunction::createUserDetailsColumn($user->id); ?>

                </td>
            <div class="row mt-3">
                <div class="col-md-3 mb-3">
                    <div class="mb-0 bg-secondary-lighten border p-2 rounded-3">
                        <label for="profile_photo" class="form-label"><?php echo e(__('Profile Photo')); ?></label>
                        <input type="file" id="profile_photo" name="profile_photo" class="form-control">
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="mb-0 bg-secondary-lighten border p-2 rounded-3">
                        <label for="fullname" class="form-label"><?php echo e(__('Fullname')); ?></label>
                        <input value="<?php echo e($user->fullname); ?>" type="text" id="fullname" name="fullname" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="mb-0 bg-secondary-lighten border p-2 rounded-3">
                        <label for="username" class="form-label"><?php echo e(__('Username')); ?></label>
                        <input type="text" value="<?php echo e($user->username); ?>" id="username" name="username" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="mb-0 bg-secondary-lighten border p-2 rounded-3">
                        <label for="user_email" class="form-label"><?php echo e(__('Email')); ?></label>
                        <input type="text" value="<?php echo e($user->user_email); ?>" id="user_email" name="user_email" class="form-control">
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="mb-0 bg-secondary-lighten border p-2 rounded-3">
                        <label for="fullname" class="form-label"><?php echo e(__('Mobile')); ?></label>
                        <div class="d-flex">
                            <select name="mobile_country_code" id="" class="form-control country-code-field">
                               <?php $__currentLoopData = $phoneCountryCodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <option <?php echo e($user->mobile_country_code == $item['phone_code'] ? 'selected' : ''); ?> value="<?php echo e($item['phone_code']); ?>"><?php echo e($item['country_code']); ?> (+<?php echo e($item['phone_code']); ?>)</option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <input min="1" value="<?php echo e($user->user_mobile_no); ?>" type="number" id="user_mobile_no" name="user_mobile_no" class="form-control mobile-field">
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="mb-0 bg-secondary-lighten border p-2 rounded-3">
                        <label for="bio" class="form-label"><?php echo e(__('Bio')); ?></label>
                        <textarea type="text"  id="bio" name="bio" class="form-control"><?php echo e($user->bio); ?></textarea>
                    </div>
                </div>

            </div>
            <?php if($user->is_dummy == Constants::userDummy): ?>
            <h5><?php echo e(__('Dummy User Functions')); ?></h5>
            <div class="row mt-3">
                <div class="col-md-3 mb-3">
                    <div class="mb-0 bg-secondary-lighten border p-2 rounded-3">
                        <label for="password" class="form-label"><?php echo e(__('Password')); ?></label>
                        <input type="text" value="<?php echo e($user->password); ?>" id="password" name="password" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="mb-0 bg-secondary-lighten border p-2 rounded-3">
                        <label for="" class="form-label"><?php echo e(__('Verified')); ?></label>
                        <div class="mb-0">
                            <input name="is_verify" type="checkbox" id="switchIsVerify" <?php echo e($user->is_verify == 1? 'checked' : ''); ?> data-switch="primary"/>
                            <label for="switchIsVerify" ></label>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shortzz_new\resources\views/editUser.blade.php ENDPATH**/ ?>