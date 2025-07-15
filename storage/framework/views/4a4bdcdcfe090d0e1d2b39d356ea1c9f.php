<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/script/hashtagDetails.js')); ?>"></script>
<script src="<?php echo e(asset('assets/script/posts.js')); ?>"></script>

<script>

</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="card">
    <input type="hidden" id="hashtag" value="<?php echo e($hashtag->hashtag); ?>">
    <div class="card-header border-bottom">
        <h4 class="card-title  header-title mb-1">
            <?php echo e(__('Hashtag Details')); ?>

        </h4>
        <h3 class="card-title mb-1 hashtag">
            #<?php echo e($hashtag->hashtag); ?>

        </h3>
        <div>
            <span class="fs-6"><?php echo e(__('Total Posts')); ?> : <?php echo e($hashtag->post_count); ?></span>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="table-responsive">
                <table id="hashtagPostsTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3">
                    <thead class="table-light">
                        <tr>
                            <th><?php echo e(__('Content')); ?></th>
                            <th><?php echo e(__('Type')); ?></th>
                            <th><?php echo e(__('User')); ?></th>
                            <th><?php echo e(__('Description & Stats')); ?></th>
                            <th><?php echo e(__('Created Date')); ?></th>
                            <th style="width: 200px;" class="text-end"><?php echo e(__('Action')); ?></th>
                        </tr>
                    </thead>
                </table>
            </div>
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
                <div class="postDescription mb-2" id="videoDescription"></div>
                <video rel="" id="video" width="450" height="450" controls>
                    <source src="" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
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
                <div class="postDescription mb-2" id="imageDescription"></div>
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
                <div class="postDescription mb-2" id="textDescription"></div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shortzz_new\resources\views/hashtagDetails.blade.php ENDPATH**/ ?>