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
                <div class="card-header">Update a job</div>
                <div class="card-body">
            
            <form action="<?php echo e(route('job.update',[$job->id])); ?>" method="POST"><?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control <?php echo e($errors->has('title') ? 'is-invalid' : ''); ?>" value="<?php echo e($job->title); ?>">
                <?php if($errors->has('title')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('title')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control <?php echo e($errors->has('description') ? 'is-invalid' : ''); ?>"><?php echo e($job->description); ?></textarea>
                <?php if($errors->has('description')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('description')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="roles">Roles:</label>
                <textarea name="roles" class="form-control <?php echo e($errors->has('roles') ? 'is-invalid' : ''); ?>"><?php echo e($job->roles); ?></textarea>
                <?php if($errors->has('roles')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('roles')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select name="category_id" class="form-control">
                    <?php $__currentLoopData = JobSearch\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cat->id); ?>" <?php echo e($cat->id==$job->category_id?'selected':''); ?>><?php echo e($cat->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                </select>
            </div>
            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" name="position" class="form-control <?php echo e($errors->has('position') ? 'is-invalid' : ''); ?>" value="<?php echo e($job->position); ?>">
                <?php if($errors->has('position')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('position')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" class="form-control <?php echo e($errors->has('address') ? 'is-invalid' : ''); ?>" value="<?php echo e($job->address); ?>">
                <?php if($errors->has('address')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('address')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="type">Type:</label>
                <select class="form-control" name="type">
                    <option value="fulltime"<?php echo e($job->type=='fulltime'?'selected':''); ?>>Fulltime</option>
                    <option value="partime"<?php echo e($job->type=='partime'?'selected':''); ?>>Part-time</option>
                    <option value="casual"<?php echo e($job->type=='casual'?'selected':''); ?>>Casual</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" name="status">
                    <option value="1"<?php echo e($job->status=='1'?'selected':''); ?>>Life</option>
                    <option value="0"<?php echo e($job->status=='0'?'selected':''); ?>>Draft</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lastdate">Last date of application:</label>
                <input type="date" name="last_date" class="form-control <?php echo e($errors->has('last_date') ? 'is-invalid' : ''); ?>" value="<?php echo e($job->last_date); ?>">
                <?php if($errors->has('last_date')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('last_date')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            </form>
            </div>
        </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMES\XAMPP\htdocs\larajob\resources\views/jobs/edit.blade.php ENDPATH**/ ?>