<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php if(Session::has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(Session::get('message')); ?>

                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">Create a job</div>
                <div class="card-body">
            
            <form action="<?php echo e(route('job.store')); ?>" method="POST"><?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control <?php echo e($errors->has('title') ? 'is-invalid' : ''); ?>" value="<?php echo e(old('title')); ?>">
                <?php if($errors->has('title')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('title')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control <?php echo e($errors->has('description') ? 'is-invalid' : ''); ?>" value="<?php echo e(old('description')); ?>"></textarea>
                <?php if($errors->has('description')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('description')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="roles">Roles:</label>
                <textarea name="roles" class="form-control <?php echo e($errors->has('roles') ? 'is-invalid' : ''); ?>" value="<?php echo e(old('roles')); ?>"></textarea>
                <?php if($errors->has('roles')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('roles')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select name="category" class="form-control">
                    <?php $__currentLoopData = JobSearch\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                </select>
            </div>
            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" name="position" class="form-control <?php echo e($errors->has('position') ? 'is-invalid' : ''); ?>" value="<?php echo e(old('position')); ?>">
                <?php if($errors->has('position')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('position')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" class="form-control <?php echo e($errors->has('address') ? 'is-invalid' : ''); ?>" value="<?php echo e(old('address')); ?>">
                <?php if($errors->has('address')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('address')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="type">Type:</label>
                <select class="form-control" name="type">
                    <option value="fulltime">Fulltime</option>
                    <option value="parttime">Part-time</option>
                    <option value="casual">Casual</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" name="status">
                    <option value="1">Live</option>
                    <option value="0">Draft</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lastdate">Last date of application:</label>
                <input type="date" name="last_date" class="form-control <?php echo e($errors->has('last_date') ? 'is-invalid' : ''); ?>" value="<?php echo e(old('last_date')); ?>">
                <?php if($errors->has('last_date')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('last_date')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>

            </form>
            </div>
        </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMES\XAMPP\htdocs\larajob\resources\views/jobs/create.blade.php ENDPATH**/ ?>