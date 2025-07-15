<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/script/posts.js')); ?>"></script>
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

<div class="card">
    <div class="card-header d-flex align-items-center border-bottom">
        <h4 class="card-title mb-0 header-title">
            <?php echo e(__('Posts')); ?>

        </h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3 mb-2 mb-sm-0 ">
                <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    
                    <a class="nav-link active show" id="v-pills-allPost-tab" data-bs-toggle="pill" href="#v-pills-allPost" role="tab" aria-controls="v-pills-allPost"
                    aria-selected="false">
                    <span class="d-md-block"><?php echo e(__('All')); ?></span>
                     </a>

                     
                    <a class="nav-link " id="v-pills-reels-tab" data-bs-toggle="pill" href="#v-pills-reels" role="tab" aria-controls="v-pills-reels"
                        aria-selected="true">
                        <span class="d-md-block"><?php echo e(__('Reels')); ?></span>
                    </a>

                     
                    <a class="nav-link " id="v-pills-videos-tab" data-bs-toggle="pill" href="#v-pills-videos" role="tab" aria-controls="v-pills-videos"
                        aria-selected="true">
                        <span class="d-md-block"><?php echo e(__('Videos')); ?></span>
                    </a>

                     
                    <a class="nav-link " id="v-pills-image-tab" data-bs-toggle="pill" href="#v-pills-image" role="tab" aria-controls="v-pills-image"
                        aria-selected="true">
                        <span class="d-md-block"><?php echo e(__('Image')); ?></span>
                    </a>

                     
                    <a class="nav-link " id="v-pills-text-tab" data-bs-toggle="pill" href="#v-pills-text" role="tab" aria-controls="v-pills-text"
                        aria-selected="true">
                        <span class="d-md-block"><?php echo e(__('Text')); ?></span>
                    </a>

                </div>
            </div> <!-- end col-->

            <div class="col-sm-12">
                <div class="tab-content mt-3" id="v-pills-tabContent">
                        
                        <div class="tab-pane fade active show" id="v-pills-allPost" role="tabpanel" aria-labelledby="v-pills-allPost-tab">
                            <div class="table-responsive">
                                <table id="allPostsTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3">
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
                    
                    <div class="tab-pane fade " id="v-pills-reels" role="tabpanel" aria-labelledby="v-pills-reels-tab">
                        <div class="table-responsive">
                            <table id="reelPostsTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3">
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
                    
                    <div class="tab-pane fade " id="v-pills-videos" role="tabpanel" aria-labelledby="v-pills-videos-tab">
                        <div class="table-responsive">
                            <table id="videoPostsTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3">
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
                    
                    <div class="tab-pane fade " id="v-pills-image" role="tabpanel" aria-labelledby="v-pills-image-tab">
                        <div class="table-responsive">
                            <table id="imagePostsTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3">
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
                    
                    <div class="tab-pane fade " id="v-pills-text" role="tabpanel" aria-labelledby="v-pills-text-tab">
                        <div class="table-responsive">
                            <table id="textPostsTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3">
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

                </div> <!-- end tab-content-->
            </div> <!-- end col-->
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

<?php echo $__env->make('include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shortzz_new\resources\views/posts.blade.php ENDPATH**/ ?>