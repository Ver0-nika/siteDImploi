<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-3">

            <?php if(empty(Auth::user()->company->logo)): ?>
            <img src="<?php echo e(asset('cover/tumblr-image-sizes-banner.png')); ?>" style="width: 100%;height:25%;">
            <?php else: ?>
            <img src="<?php echo e(asset('uploads/logo')); ?>/<?php echo e(Auth::user()->company->logo); ?>" style="width:100%;">
            <?php endif; ?>

            <br><br>

            <form action="<?php echo e(route('company.logo')); ?>" method="POST" enctype="multipart/form-data"><?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-header"><center>Update your LOGO</center></div>
                <div class="card-body">
                    <input type="file" class="form-control" name="company_logo">
                    <br>
                    <button class="btn btn-primary float-right" type="submit">Update</button>
                </div>
            </div> 
            </form> 
            <br>
            <form action="<?php echo e(route('cover.photo')); ?>" method="POST" enctype="multipart/form-data"><?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-header"><center>Update your COVER IMAGE</center></div>
                <div class="card-body">
                    <input type="file" class="form-control" name="cover_photo">
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

                <div class="card-header"><center>Update your company information</center></div>

                <form action="<?php echo e(route('company.store')); ?>" method="POST"><?php echo csrf_field(); ?>

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo e(Auth::user()->company->address); ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo e(Auth::user()->company->phone); ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Website</label>
                        <input type="text" class="form-control" name="website" value="<?php echo e(Auth::user()->company->website); ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Slogan</label>
                        <input type="text" class="form-control" name="slogan" value="<?php echo e(Auth::user()->company->slogan); ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control" value="<?php echo e(Auth::user()->company->description); ?>">
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
            <div class="card">
                <div class="card-header"><center>ABOUT your company</center></div>
                <div class="card-body">
                    <p><strong>Company name:&nbsp;</strong><?php echo e(Auth::user()->company->cname); ?></p>
                    <p><strong>Address:&nbsp;</strong><?php echo e(Auth::user()->company->address); ?></p>
                    <p><strong>Phone:&nbsp;</strong><?php echo e(Auth::user()->company->phone); ?></p>
                    <p><strong>Website:&nbsp;</strong><a href="<?php echo e(Auth::user()->company->website); ?>"><?php echo e(Auth::user()->company->website); ?></a></p>
                    <p><strong>Slogan:&nbsp;</strong><?php echo e(Auth::user()->company->slogan); ?></p>
                    <p><strong>Description:&nbsp;</strong><?php echo e(Auth::user()->company->description); ?></p>
                    <p style="text-align: center;"><strong><a href="company/<?php echo e(Auth::user()->company->slug); ?>"><button class="btn btn-outline-primary btn-sm">WATCH COMPANY PAGE</button></a></strong></p>
                </div>
            </div>
            <br>
            
                       
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMES\XAMPP\htdocs\larajob\resources\views/company/create.blade.php ENDPATH**/ ?>