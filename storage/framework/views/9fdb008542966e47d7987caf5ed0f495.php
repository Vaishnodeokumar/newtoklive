<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/script/reports.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header d-flex align-items-center border-bottom">
        <h4 class="card-title mb-0 header-title">
            <?php echo e(__('Reports')); ?>

        </h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3 mb-2 mb-sm-0 ">
                <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active show" id="v-pills-posts-tab" data-bs-toggle="pill" href="#v-pills-posts" role="tab" aria-controls="v-pills-posts"
                    aria-selected="false">
                    <span class="d-md-block"><?php echo e(__('Posts')); ?></span>
                     </a>
                    <a class="nav-link " id="v-pills-user-tab" data-bs-toggle="pill" href="#v-pills-user" role="tab" aria-controls="v-pills-user"
                        aria-selected="true">
                        <span class="d-md-block"><?php echo e(__('Users')); ?></span>
                    </a>

                </div>
            </div> <!-- end col-->

            <div class="col-sm-12">
                <div class="tab-content mt-3" id="v-pills-tabContent">
                     
                     <div class="tab-pane fade active show" id="v-pills-posts" role="tabpanel" aria-labelledby="v-pills-posts-tab">
                        <div class="table-responsive">
                            <table id="postReportTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3">
                                <thead class="table-light">
                                    <tr>
                                        <th><?php echo e(__('Post')); ?></th>
                                        <th><?php echo e(__('Post User')); ?></th>
                                        <th><?php echo e(__('Details')); ?></th>
                                        <th><?php echo e(__('Reported By')); ?></th>
                                        <th><?php echo e(__('Date')); ?></th>
                                        <th style="width: 200px;" class="text-end"><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade " id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
                        <div class="table-responsive">
                            <table class="table table-centered table-hover w-100 dt-responsive nowrap mt-3" id="userReportTable">
                                <thead class="table-light">
                                    <tr>
                                        <th><?php echo e(__('User')); ?></th>
                                        <th><?php echo e(__('Details')); ?></th>
                                        <th><?php echo e(__('Reported By')); ?></th>
                                        <th><?php echo e(__('Date')); ?></th>
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
                <div class="itemDescription mb-2" id="videoDescription"></div>
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

<?php echo $__env->make('include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shortzz_new\resources\views/reports.blade.php ENDPATH**/ ?>