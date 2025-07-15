<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/script/postDetails.js')); ?>"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
     navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
     },
   });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php
use App\Models\Constants;
use App\Models\GlobalFunction;

?>

<div class="row">
    <input type="hidden" name="postId" id="postId" value="<?php echo e($post->id); ?>">
    
    <div class=" col-lg-4">
        <div class="card">
            <div class="card-header d-flex align-items-center border-bottom">
                <div>
                    <h4 class="header-title mb-0 d-flex align-items-center">
                        <?php echo e(__('Post Details')); ?>

                        <span class="ms-2">
                            <?php echo $postType; ?>

                        </span>
                    </h4>
                    <span class="fs-6"><?php echo e(__('Post ID')); ?> : <?php echo e($post->id); ?></span>
                </div>
                
                <p class="text-secondary fs-6 ms-auto"><?php echo e(GlobalFunction::formateDatabaseTime($post->created_at)); ?></p>
            </div>
            <div class="card-body">
                <table class="table mb-0">
                    <td class="p-0 border-0">
                    <?php echo GlobalFunction::createUserDetailsColumn($postUser->id); ?>

                    </td>
                </table>
                <div class="row mt-3">
                    <div class="col">
                        <?php if($post->post_type !=  Constants::postTypeText): ?>
                            <div class="postSpace bg-dark d-flex justify-content-center align-items-center rounded ">
                                <?php if($post->post_type == Constants::postTypeReel || $post->post_type == Constants::postTypeVideo): ?>
                                
                                <video rel="" id="video" width="450" height="450" controls>
                                    <source src="<?php echo e($baseUrl.$post->video); ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <?php elseif($post->post_type == Constants::postTypeImage): ?>
                                
                                <div class="swiper mySwiper postImageSwiper w-100 h-100">
                                    <div class="swiper-wrapper" id="imgPostSwiperWrapper">
                                        
                                        <?php $__currentLoopData = $post->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="swiper-slide p-0">
                                                <img src="<?php echo e($baseUrl.$image->image); ?>" alt="" class="img-fluid ">
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <?php endif; ?>

                            </div>
                        <?php endif; ?>
                        <div class="mt-2">
                            <?php echo $formattedDesc; ?>

                        </div>
                        <div class="mt-3">
                            <?php echo $states; ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        <?php if($music != null): ?>
            <div class="card">
                <div class="card-header d-flex align-items-center border-bottom">
                    <div>
                        <h4 class="header-title mb-0 d-flex align-items-center">
                            <?php echo e(__('Music Details')); ?>

                        </h4>
                        <span class="fs-6"><?php echo e(__('Music ID')); ?> : <?php echo e($music->id); ?></span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="rounded-circle shadow border" style="width: 120px; height: 120px; object-fit: cover;" src="<?php echo e($baseUrl.$music->image); ?>" alt="">
                        <div class="mt-2">
                            <audio controls><source src="<?php echo e($baseUrl.$music->sound); ?>"></audio>
                        </div>
                        <h4 class="mb-0"><?php echo e($music->title); ?></h4>
                        <span class="fs-6"><?php echo e($music->artist); ?></span>
                        <div class="mt-2">
                            <span class="fs-6 header-title mt-3"><?php echo e(__('Added By')); ?></span>
                        </div>
                        <?php if($music->added_by == 0): ?>
                        <table class="table mb-0">
                            <td class="p-0 border-0">
                            <?php echo GlobalFunction::createUserDetailsColumn($music->user_id); ?>

                            </td>
                        </table>
                        <?php else: ?>
                        <span class='badge badge-info-lighten fs-5 header-title'><?php echo e(__('Admin')); ?></span>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        <?php endif; ?>
    </div>
    
    <div class=" col-lg-8">
        <div class="card">
            <div class="card-header d-flex align-items-center border-bottom">
                <div>
                    <h4 class="header-title mb-0 d-flex align-items-center">
                        <?php echo e(__('Comments')); ?>

                    </h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="commentsTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3">
                        <thead class="table-light">
                            <tr>
                                <th><?php echo e(__('Comment')); ?></th>
                                <th><?php echo e(__('User')); ?></th>
                                <th><?php echo e(__('Created Date')); ?></th>
                                <th style="width: 200px;" class="text-end"><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex align-items-center border-bottom">
                <div>
                    <h4 class="header-title mb-0 d-flex align-items-center">
                        <?php echo e(__('Comment Replies')); ?>

                    </h4>
                </div>
            </div>
            <div class="card-body">
                <span>*Click on replies <i class='uil-comments text-info px-1 border rounded-2'></i> button on comments table and replies will list here..</span>
                <div class="table-responsive mt-2">
                    <table id="commentRepliesTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3">
                        <thead class="table-light">
                            <tr>
                                <th><?php echo e(__('Reply')); ?></th>
                                <th><?php echo e(__('User')); ?></th>
                                <th><?php echo e(__('Created Date')); ?></th>
                                <th style="width: 200px;" class="text-end"><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shortzz_new\resources\views/postDetails.blade.php ENDPATH**/ ?>