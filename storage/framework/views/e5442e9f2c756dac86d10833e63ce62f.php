<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/script/viewUserDetails.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php
use App\Models\GlobalFunction;
?>

<style>
 a {
        color: #B754F9
    }
</style>
<input type="hidden" name="user_id" id="user_id" value="<?php echo e($user->id); ?>">

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header d-flex align-items-center border-bottom">
                <div class="w-100">
                    <h4 class="card-title header-title mb-1">
                        <?php echo e(__('User Details')); ?>

                    </h4>
                    <div class="d-flex justify-content-between ">
                        <div>
                            <h4 class="card-title mb-1 hashtag">
                                <?php echo e($user->username); ?>

                                <?php if($user->is_verify == 1): ?>
                                <img src="<?php echo e(asset('assets/img/ic_verify.png')); ?>" alt="profile" class="rounded-circle object-fit-cover" width="18px">
                                <?php endif; ?>
                                <?php echo GlobalFunction::createUserTypeBadge($user->id); ?>

                            </h4>
                        </div>
                        <div>
                            <a href='<?php echo e(route('editUser',$user->id)); ?>' class='action-btn edit d-flex align-items-center justify-content-center btn border rounded-2 text-info ms-1'>
                                <i class='uil-pen'></i>
                            </a>
                        </div>
                    </div>

                    <span class="fs-6"><?php echo e(__('User ID')); ?> : <?php echo e($user->id); ?></span>
                </div>
            </div>
            <div class="text-center">
                <div class="card-body">

                        <img src="<?php echo e($user->profile_photo == null ? url('assets/img/placeholder.png') : $baseUrl.$user->profile_photo); ?>" class="rounded-circle avatar-lg img-thumbnail object-fit-cover" alt="profile-image">
                        <div class="mt-2">
                            <h4 class="mb-0  d-inline"><?php echo e($user->username); ?>

                                <?php if($user->is_verify == 1): ?>
                                <img src="<?php echo e(asset('assets/img/ic_verify.png')); ?>" alt="profile" class="rounded-circle object-fit-cover" width="18px">
                                <?php endif; ?>
                            </h4>
                        </div>
                        <p class="text-muted font-14 mb-0"><?php echo e($user->fullname); ?></p>
                        <span class='badge badge-primary-lighten fs-6 mt-1'><?php echo e(__('Level')); ?> : <?php echo e($user->levelNumber); ?></span>

                        <div class="d-flex aligh-items-center justify-content-center mt-3">
                            
                            <div style="width: 100px" class="text-center">
                                <h5 class="m-0"><?php echo e(GlobalFunction::formatNumber($user->total_post_likes_count)); ?></h5>
                                <span class="fs-6"><?php echo e(__('Likes')); ?></span>
                            </div>
                            
                            <div style="width: 100px" class="text-center">
                                <h5 class="m-0"><?php echo e(GlobalFunction::formatNumber($user->follower_count)); ?></h5>
                                <span class="fs-6"><?php echo e(__('Followers')); ?></span>
                            </div>
                            
                            <div style="width: 100px" class="text-center">
                                <h5 class="m-0"><?php echo e(GlobalFunction::formatNumber($user->following_count)); ?></h5>
                                <span class="fs-6"><?php echo e(__('Following')); ?></span>
                            </div>
                        </div>

                        <div class="text-center">
                            
                            <p class="text-muted font-13 mb-3 mt-3">
                               <?php echo e($user->bio); ?>

                            </p>
                        </div>
                        
                        <?php if($user->links && $user->links->isNotEmpty()): ?>
                        <hr>
                         <h4 class="font-13 text-uppercase mb-0"><?php echo e(__('Links')); ?></h4>
                        <div id="link-space" class="mt-2">
                           <?php $__currentLoopData = $user->links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <div class="link-item border px-4 py-2 mt-1 rounded-pill d-flex align-items-center">
                                <div class="d-grid text-start">
                                    <div class="text-body text-dark fw-semibold"><?php echo e($link->title); ?></div>
                                    <a class="fs-6" target="_blank" href="<?php echo e($link->url); ?>"><?php echo e($link->url); ?></a>
                                </div>
                                <a href='#'
                                    rel='<?php echo e($link->id); ?>'
                                    class='ms-auto action-btn delete-link d-flex align-items-center justify-content-center btn border rounded-2 text-danger ms-1'>
                                        <i class='uil-trash-alt'></i>
                                </a>
                            </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endif; ?>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header d-flex align-items-center border-bottom">
                <h4 class="card-title header-title">
                    <?php echo e(__('Wallet')); ?>

                </h4>
                <a data-bs-toggle="modal" data-bs-target="#addCoinsModal" class="btn btn-dark ms-auto"><?php echo e(__('Add Coins')); ?></a>
            </div>
            <div class="text-center">
                <div class="card-body">
                    <div>
                        <h1 class="m-0 text-primary"><?php echo e(GlobalFunction::formatNumber($user->coin_wallet)); ?></h1>
                        <span class="fs-6"><?php echo e(__('Balance')); ?></span>
                    </div>
                    <div class="d-flex aligh-items-center justify-content-center mt-3">
                        
                        <div style="width: 100px" class="text-center">
                            <h4 class="m-0 text-primary"><?php echo e(GlobalFunction::formatNumber($user->coin_collected_lifetime)); ?></h4>
                            <span class="fs-6"><?php echo e(__('Collected')); ?>*</span>
                        </div>
                        
                        <div style="width: 100px" class="text-center">
                            <h4 class="m-0 text-primary"><?php echo e(GlobalFunction::formatNumber($user->coin_gifted_lifetime)); ?></h4>
                            <span class="fs-6"><?php echo e(__('Gifted')); ?>*</span>
                        </div>
                        
                        <div style="width: 100px" class="text-center">
                            <h4 class="m-0 text-primary"><?php echo e(GlobalFunction::formatNumber($user->coin_purchased_lifetime)); ?></h4>
                            <span class="fs-6"><?php echo e(__('Purchased')); ?>*</span>
                        </div>
                    </div>
                    <p class="font-12 mt-2 mb-0"><?php echo e(__('*lifetime')); ?></p>
                </div>

            </div>
        </div>
        
        <div class="card">
            <div class="card-header d-flex align-items-center border-bottom">
                <h4 class="card-title header-title">
                    <?php echo e(__('Other Details')); ?>

                </h4>
            </div>
            <div class="text-center">
                <div class="card-body">
                        <div class="text-start">
                            <div class="row">
                                
                                <div class="col-3 text-end">
                                    <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Freeze')); ?> :</strong></p>
                                </div>
                                <div class="mb-2 col-9">
                                    <input name="is_freez" type="checkbox" id="switchFreezeStatus" <?php echo e($user->is_freez == 1? 'checked' : ''); ?> data-switch="primary"/>
                                    <label for="switchFreezeStatus" ></label>
                                </div>
                                
                                <div class="col-3 text-end">
                                    <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Moderator')); ?> :</strong></p>
                                </div>
                                <div class="mb-2 col-9">
                                    <input name="is_moderator" type="checkbox" id="switchModeratorStatus" <?php echo e($user->is_moderator == 1? 'checked' : ''); ?> data-switch="primary"/>
                                    <label for="switchModeratorStatus" ></label>
                                </div>
                                <div class="col-3 text-end">
                                    <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Identity')); ?> :</strong></p>
                                </div>
                                <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->identity); ?></p>
                                <div class="col-3 text-end">
                                    <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Email')); ?> :</strong></p>
                                </div>
                                <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->user_email); ?></p>
                                <div class="col-3 text-end">
                                    <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Phone')); ?> :</strong></p>
                                </div>
                                <div class="col-9">
                                    <?php if($user->user_mobile_no != null): ?>
                                    <p class="text-muted mb-2 font-13">+<?php echo e($user->mobile_country_code.' '.$user->user_mobile_no); ?></p>
                                    <?php endif; ?>
                                </div>

                            </div>
                            <hr>
                            
                            <div class="row">
                                 <div class="col-3 text-end">
                                    <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Last Opened')); ?> :</strong></p>
                                </div>
                                <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->app_last_used_at); ?></p>
                                 <div class="col-3 text-end">
                                    <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Log-in')); ?> :</strong></p>
                                </div>
                                <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->login_method); ?></p>
                                 <div class="col-3 text-end">
                                    <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Device OS')); ?> :</strong></p>
                                </div>
                                <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->device_type == 1 ? 'Android' : 'iOS'); ?></p>
                                 <div class="col-3 text-end">
                                    <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Device Token')); ?> :</strong></p>
                                </div>
                                <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->device_token); ?></p>
                            </div>
                            
                            <hr>
                            <div class="row">
                                 <div class="col-3 text-end">
                                    <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Country')); ?> :</strong></p>
                                </div>
                                <p class="text-muted mb-2 font-13 col-9">(<?php echo e($user->countryCode); ?>) <?php echo e($user->country); ?></p>
                                 <div class="col-3 text-end">
                                    <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Region')); ?> :</strong></p>
                                </div>
                                <p class="text-muted mb-2 font-13 col-9">(<?php echo e($user->region); ?>) <?php echo e($user->regionName); ?></p>
                                 <div class="col-3 text-end">
                                    <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('City')); ?> :</strong></p>
                                </div>
                                <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->city); ?></p>
                                 <div class="col-3 text-end">
                                    <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Latitude')); ?> :</strong></p>
                                </div>
                                <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->lat); ?></p>
                                 <div class="col-3 text-end">
                                    <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Longitude')); ?> :</strong></p>
                                </div>
                                <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->lon); ?></p>
                            </div>
                            
                            <hr>
                            <div class="row">
                                 <div class="col-3 text-end">
                                    <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Who Can View Post')); ?> :</strong></p>
                                </div>
                                <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->who_can_view_post == 0 ? 'Everyone' : 'Followers Only'); ?></p>
                                 <div class="col-3 text-end">
                                    <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Show Following')); ?> :</strong></p>
                                </div>
                                <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->show_my_following == 1 ? 'Yes' : 'No'); ?></p>
                                 <div class="col-3 text-end">
                                    <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Receive Message')); ?> :</strong></p>
                                </div>
                                <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->receive_message == 1 ? 'Yes' : 'No'); ?></p>
                            </div>
                        </div>

                </div>
            </div>
        </div>
         
         <div class="card">
            <div class="card-header d-flex align-items-center border-bottom">
                <h4 class="card-title header-title">
                    <?php echo e(__('Notifications')); ?>

                </h4>
            </div>
            <div class="text-center">
                <div class="card-body">
                    <div class="text-start">
                        <div class="row">
                            
                            <div class="col-3 text-end">
                                <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Post Likes')); ?> :</strong></p>
                            </div>
                            <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->notify_post_like == 1 ? 'Yes' : 'No'); ?></p>
                            
                            <div class="col-3 text-end">
                                <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Post Comments')); ?> :</strong></p>
                            </div>
                            <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->notify_post_comment == 1 ? 'Yes' : 'No'); ?></p>
                            
                            <div class="col-3 text-end">
                                <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Follow')); ?> :</strong></p>
                            </div>
                            <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->notify_follow == 1 ? 'Yes' : 'No'); ?></p>
                            
                            <div class="col-3 text-end">
                                <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Mentions')); ?> :</strong></p>
                            </div>
                            <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->notify_mention == 1 ? 'Yes' : 'No'); ?></p>
                            
                            <div class="col-3 text-end">
                                <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Gifts Received')); ?> :</strong></p>
                            </div>
                            <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->notify_gift_received == 1 ? 'Yes' : 'No'); ?></p>
                            
                            <div class="col-3 text-end">
                                <p class="text-muted mb-2 font-13 "><strong><?php echo e(__('Chat Message')); ?> :</strong></p>
                            </div>
                            <p class="text-muted mb-2 font-13 col-9"><?php echo e($user->notify_chat == 1 ? 'Yes' : 'No'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-8">
        
        <div class="card">
            <div class="card-header d-flex align-items-center border-bottom">
                    <h4 class="card-title header-title">
                        <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active show" id="v-pills-posts-tab" data-bs-toggle="pill" href="#v-pills-posts" role="tab" aria-controls="v-pills-posts"
                            aria-selected="false">
                            <span class="d-md-block"><?php echo e(__('Posts')); ?></span>
                             </a>
                            <a class="nav-link " id="v-pills-stories-tab" data-bs-toggle="pill" href="#v-pills-stories" role="tab" aria-controls="v-pills-stories"
                                aria-selected="true">
                                <span class="d-md-block"><?php echo e(__('Stories')); ?></span>
                            </a>
                        </div>
                    </h4>
            </div>
            <div class="card-body">

                <div class="row">

                    <div class="col-sm-12">
                        <div class="tab-content mt-3" id="v-pills-tabContent">
                            
                            <div class="tab-pane fade active show" id="v-pills-posts" role="tabpanel" aria-labelledby="v-pills-posts-tab">
                                <div class="table-responsive">
                                    <table id="userPostsTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3">
                                        <thead class="table-light">
                                            <tr>
                                                <th><?php echo e(__('Content')); ?></th>
                                                <th><?php echo e(__('Type')); ?></th>
                                                <th class="w-100"><?php echo e(__('Description & Stats')); ?></th>
                                                <th><?php echo e(__('Created Date')); ?></th>
                                                <th style="width: 200px;" class="text-end"><?php echo e(__('Action')); ?></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                              
                              <div class="tab-pane fade " id="v-pills-stories" role="tabpanel" aria-labelledby="v-pills-stories-tab">
                                <div class="table-responsive">
                                    <table class="table table-centered table-hover w-100 dt-responsive nowrap mt-3" id="userStoriesTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th><?php echo e(__('Story')); ?></th>
                                                <th><?php echo e(__('Type')); ?></th>
                                                <th><?php echo e(__('Created At')); ?></th>
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
    </div>
</div>


<div id="addCoinsModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('Add Coins')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form id="addCoinsForm" method="POST">
                <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="coins" class="form-label"><?php echo e(__('Coins')); ?></label>
                        <input class="form-control" type="number" min="1" id="coins" name="coins" required>
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


<div id="videoPostModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('View Content')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="itemDescription mb-2" id="videoDescription"></div>
                <video rel="" id="video" width="450" height="450" controls>
                    <source src="" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>

<div id="videoStoryModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('View Story')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <video rel="" id="videoStory" width="450" height="450" controls>
                    <source src="" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>


<div id="imageStoryModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('View Story')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <div class="swiper mySwiper storyImageSwiper">
                    <div class="swiper-wrapper" id="imgStorySwiperWrapper">
                        

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>
            </div>
        </div>
    </div>
</div>

<div id="imagePostModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('View Content')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="itemDescription mb-2" id="imageDescription"></div>
                <div class="swiper mySwiper postImageSwiper">
                    <div class="swiper-wrapper" id="imgPostSwiperWrapper">
                        

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>
            </div>
        </div>
    </div>
</div>

<div id="textPostModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('View Content')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="itemDescription mb-2" id="textDescription"></div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shortzz_new\resources\views/viewUserDetails.blade.php ENDPATH**/ ?>