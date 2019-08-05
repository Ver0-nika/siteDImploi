<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <img src="<?php echo e(asset('avatar/man.jpg')); ?>" width="100">
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Update Your Profile</div>

                <form action="<?php echo e(route('profile.create')); ?>" method="POST"><?php echo csrf_field(); ?>

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>

                    <div class="form-group">
                        <label for="">Experience</label>
                        <textarea name="experience" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Bio</label>
                        <textarea name="bio" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>
                </div>
                </form>
            </div>

            <?php if(Session::has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(Session::get('message')); ?>

                </div>
            <?php endif; ?>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">About you</div>
                <div class="card-body">
                    <p>Name:<?php echo e(Auth::user()->name); ?></p>
                    <p>Email:<?php echo e(Auth::user()->email); ?></p>
                    <p>Address:<?php echo e(Auth::user()->profile->address); ?></p>
                    <p>Gender:<?php echo e(Auth::user()->profile->gender); ?></p>
                    <p>Experience:<?php echo e(Auth::user()->profile->experience); ?></p>
                    <p>Bio:<?php echo e(Auth::user()->profile->bio); ?></p>
                    <p>Member On:<?php echo e(Auth::user()->created_at); ?></p>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Update coverletter</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="cover_letter">
                    <br>
                    <button class="btn btn-success float-right" type="submit">Update</button>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Update resume</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="resume">
                    <br>
                    <button class="btn btn-success float-right" type="submit">Update</button>
                </div>
            </div>            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMES\XAMPP\htdocs\larajob\resources\views/profile/index.blade.php ENDPATH**/ ?>