<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-3">

            <?php if(empty(Auth::user()->profile->avatar)): ?>
                <img src="<?php echo e(asset('avatar/man.jpg')); ?>" width="100" style="width: 100%;">
            <?php else: ?>
                <img src="<?php echo e(asset('uploads/avatar')); ?>/<?php echo e(Auth::user()->profile->avatar); ?>" width="100" style="width: 100%;">
            <?php endif; ?>

            <br><br>

            <form action="<?php echo e(route('avatar')); ?>" method="POST" enctype="multipart/form-data"><?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-header" style="text-align: center;">Update your AVATAR</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="avatar">
                    <br>
                    <button class="btn btn-primary float-right" type="submit">Update</button>
                </div>
            </div> 
            </form> 

        </div>
        <div class="col-md-5">
            <div class="card">

                <?php if(Session::has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(Session::get('message')); ?>

                </div>
                <?php endif; ?>

                <div class="card-header" style="text-align: center;">ABOUT YOU</div>
                <div class="card-body">
                    <p><strong>Name:&nbsp;</strong><?php echo e(Auth::user()->name); ?></p>
                    <p><strong>Email:&nbsp;</strong><?php echo e(Auth::user()->email); ?></p>
                    <p><strong>Address:&nbsp;</strong><?php echo e(Auth::user()->profile->address); ?></p>
                    <p><strong>Gender:&nbsp;</strong><?php echo e(Auth::user()->profile->gender); ?></p>
                    <p><strong>Experience:&nbsp;</strong><?php echo e(Auth::user()->profile->experience); ?></p>
                    <p><strong>Biography:&nbsp;</strong><?php echo e(Auth::user()->profile->bio); ?></p>
                    <p><strong>Member On:&nbsp;</strong><?php echo e(date('F d Y',strtotime(Auth::user()->created_at))); ?></p>

                    <?php if(!empty(Auth::user()->profile->resume)): ?>
                        <p style="text-align: center;"><a href="<?php echo e(Storage::url(Auth::user()->profile->resume)); ?>">RESUME</a></p>
                    <?php else: ?>
                        <p style="text-align: center;">Please upload your RESUME</p>
                    <?php endif; ?>
                    
                    <?php if(!empty(Auth::user()->profile->cover_letter)): ?>
                        <p style="text-align: center;"><a href="<?php echo e(Storage::url(Auth::user()->profile->cover_letter)); ?>">COVER LETTER</a></p>
                    <?php else: ?>
                        <p style="text-align: center;">Please upload your COVER LETTER</p>
                    <?php endif; ?>

                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header" style="text-align: center;">Update your PROFILE</div>

                <form action="<?php echo e(route('profile.create')); ?>" method="POST"><?php echo csrf_field(); ?>

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo e(Auth::user()->profile->address); ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Experience</label>
                        <textarea name="experience" class="form-control"><?php echo e(Auth::user()->profile->experience); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Biography</label>
                        <textarea name="bio" class="form-control"><?php echo e(Auth::user()->profile->bio); ?></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" type="submit">Update</button>
                        <br>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <div class="col-md-4">
            <form action="<?php echo e(route('resume')); ?>" method="POST" enctype="multipart/form-data"><?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-header" style="text-align: center;">Update your RESUME</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="resume">
                    <br>
                    <button class="btn btn-primary float-right" type="submit">Update</button>
                </div>
            </div> 
            </form>
            <br>
            <form action="<?php echo e(route('cover.letter')); ?>" method="POST" enctype="multipart/form-data"><?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-header" style="text-align: center;">Update your COVER LETTER</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="cover_letter">
                    <br>
                    <button class="btn btn-primary float-right" type="submit">Update</button>
                </div>
            </div>
            </form>           
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMES\XAMPP\htdocs\larajob\resources\views/profile/index.blade.php ENDPATH**/ ?>