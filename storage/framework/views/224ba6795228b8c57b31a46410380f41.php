<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/script/music.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header d-flex align-items-center border-bottom">
        <h4 class="card-title mb-0 header-title">
            <?php echo e(__('Music')); ?>

        </h4>
        <a data-bs-toggle="modal" data-bs-target="#addMusicCategoryModal" class="btn btn-dark ms-auto"><?php echo e(__('Add Category')); ?></a>
        <a data-bs-toggle="modal" data-bs-target="#addMusicModal" class="btn btn-dark ms-2"><?php echo e(__('Add Music')); ?></a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3 mb-2 mb-sm-0 ">
                <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active show" id="v-pills-music-tab" data-bs-toggle="pill" href="#v-pills-music" role="tab" aria-controls="v-pills-music"
                    aria-selected="false">
                    <span class="d-md-block"><?php echo e(__('Music')); ?></span>
                     </a>
                    <a class="nav-link " id="v-pills-category-tab" data-bs-toggle="pill" href="#v-pills-category" role="tab" aria-controls="v-pills-category"
                        aria-selected="true">
                        <span class="d-md-block"><?php echo e(__('Categories')); ?></span>
                    </a>

                </div>
            </div> <!-- end col-->

            <div class="col-sm-12">
                <div class="tab-content mt-3" id="v-pills-tabContent">
                    
                    <div class="tab-pane fade " id="v-pills-category" role="tabpanel" aria-labelledby="v-pills-category-tab">
                        <div class="table-responsive">
                            <table class="table table-centered table-hover w-100 dt-responsive nowrap mt-3" id="musicCategoryTable">
                                <thead class="table-light">
                                    <tr>
                                        <th><?php echo e(__('Name')); ?></th>
                                        <th><?php echo e(__('Music Count')); ?></th>
                                        <th style="width: 200px;" class="text-end"><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade active show" id="v-pills-music" role="tabpanel" aria-labelledby="v-pills-music-tab">
                        <div class="table-responsive">
                            <table id="musicTable" class="table table-centered table-hover w-100 dt-responsive nowrap mt-3">
                                <thead class="table-light">
                                    <tr>
                                        <th><?php echo e(__('Image')); ?></th>
                                        <th><?php echo e(__('Music')); ?></th>
                                        <th><?php echo e(__('Title')); ?></th>
                                        <th><?php echo e(__('Category')); ?></th>
                                        <th><?php echo e(__('Duration')); ?></th>
                                        <th><?php echo e(__('Artist')); ?></th>
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


<div id="editMusicModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('Edit Music')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form id="editMusicForm" method="POST">
                <input id="editMusicId" type="hidden" name="id">
                <div class="modal-body">
                    <div class="mb-2 d-flex align-items-center">
                        <img id="imgEditMusicPreview" src="" alt="" class="rounded" height="100" width="100">
                        <audio id="audioEditMusicPreview" class="ms-2" controls="">
                            <source src="" type="audio/mp3">
                        </audio>
                    </div>
                    <div class="mb-2">
                        <label for="image" class="form-label"><?php echo e(__('Image (Optional)')); ?></label>
                        <input id="inputEditMusicImage" class="form-control" type="file" accept="image/*" name="image" >
                    </div>
                    <div class="mb-2">
                        <label for="sound" class="form-label"><?php echo e(__('Select Music (Optional)')); ?></label>
                        <input id="inputEditMusicFile" class="form-control" type="file" accept="audio/*" id="editMusicSound" name="sound">
                    </div>
                    <div class="mb-2">
                        <label for="title" class="form-label"><?php echo e(__('Title')); ?></label>
                        <input class="form-control" type="text" id="editMusicTitle" name="title" required>
                    </div>
                    <div class="mb-2">
                        <label for="title" class="form-label"><?php echo e(__('Category')); ?></label>
                        <select name="category_id" id="editMusicCategory" class="form-control select2" data-toggle="select2" required>
                            <option selected disabled><?php echo e(__('Select Category')); ?></option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="row">
                        <div class="mb-2 col-6">
                            <label for="duration" class="form-label"><?php echo e(__('Duration')); ?></label>
                            <input class="form-control" type="text" id="editMusicDuration" name="duration" required>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="artist" class="form-label"><?php echo e(__('Artist')); ?></label>
                            <input class="form-control" type="text" id="editMusicArtist" name="artist" required>
                        </div>
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

<div id="addMusicModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('Add Music')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form id="addMusicForm" method="POST">
                <div class="modal-body">
                    <div class="mb-2 d-flex align-items-center">
                        <img id="imgAddMusicPreview" src="<?php echo e(url('assets/img/placeholder.png')); ?>" alt="" class="rounded" height="100" width="100">
                        <audio id="audioAddMusicPreview" class="ms-2" controls="">
                            <source src="" type="audio/mp3">
                        </audio>
                    </div>
                    <div class="mb-2">
                        <label for="image" class="form-label"><?php echo e(__('Image')); ?></label>
                        <input id="inputAddMusicImage" class="form-control" type="file" accept="image/*" id="image" name="image" required>
                    </div>
                    <div class="mb-2">
                        <label for="sound" class="form-label"><?php echo e(__('Select Music')); ?></label>
                        <input id="inputAddMusicFile" class="form-control" type="file" accept="audio/*" id="sound" name="sound" required>
                    </div>
                    <div class="mb-2">
                        <label for="title" class="form-label"><?php echo e(__('Title')); ?></label>
                        <input class="form-control" type="text" id="title" name="title" required>
                    </div>
                    <div class="mb-2">
                        <label for="title" class="form-label"><?php echo e(__('Category')); ?></label>
                        <select name="category_id" id="" class="form-control select2 remove-searchbar" data-toggle="select2" required>
                            <option selected disabled><?php echo e(__('Select Category')); ?></option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="row">
                        <div class="mb-2 col-6">
                            <label for="duration" class="form-label"><?php echo e(__('Duration')); ?></label>
                            <input class="form-control" type="text" id="duration" name="duration" required>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="artist" class="form-label"><?php echo e(__('Artist')); ?></label>
                            <input class="form-control" type="text" id="artist" name="artist" required>
                        </div>
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

<div id="addMusicCategoryModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('Add Category')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form id="addMusicCategoryForm" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label"><?php echo e(__('Name')); ?></label>
                        <input class="form-control" type="text" id="name" name="name" required="">
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

<div id="editMusicCategoryModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel"><?php echo e(__('Edit Category')); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form id="editMusicCategoryForm" method="POST">
                <input type="hidden" name="id" id="editMusicCatId">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label"><?php echo e(__('Name')); ?></label>
                        <input class="form-control" type="text" id="editMusicCatName" name="name" required="">
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

<?php echo $__env->make('include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shortzz_new\resources\views/music.blade.php ENDPATH**/ ?>