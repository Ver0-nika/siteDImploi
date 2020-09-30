<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <form action="<?php echo e(route('alljobs')); ?>" method="GET">
        <div class="form-inline">
            <div class="form-group">
                <label>Keyword&nbsp;</label>
                <input type="text" name="title" class="form-control">&nbsp;&nbsp;&nbsp;
            </div>
            <div class="form-group">
                <label>Employment type&nbsp;</label>
                <select class="form-control" name="type">
                    <option value="">-select-</option>
                    <option value="fulltime">Fulltime</option>
                    <option value="parttime">Part-time</option>
                    <option value="casual">Casual</option>
                </select>
                    &nbsp;&nbsp;
            </div>
            <div class="form-group">
                <label>Category</label>
                <select name="category_id" class="form-control">
                    <option value="">-select-</option>
                    <?php $__currentLoopData = JobSearch\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                </select>
                &nbsp;&nbsp;
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control">&nbsp;&nbsp;
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </div>
        </div>
        </form>
        <h1>Recent Jobs</h1>
        <table class="table">
            
            <tbody>
                <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><img src="<?php echo e(asset('uploads/logo')); ?>/<?php echo e($job->company->logo); ?>" width="80"></td>
                    <td>Position:<?php echo e($job->position); ?>

                        <br>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<?php echo e($job->type); ?>

                    </td>
                    <td><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Address:<?php echo e($job->address); ?></td>
                    <td><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;Date:<?php echo e($job->created_at->diffForHumans()); ?></td>
                    <td>
                    <a href="<?php echo e(route('jobs.show',[$job->id,$job->slug])); ?>">
                        <button class="btn btn-primary btn-sm">Apply</button>
                    </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <?php echo e($jobs->appends(Illuminate\Support\Facades\Input::except('page'))->links()); ?>


    </div>

</div>



<?php $__env->stopSection(); ?>

<style>
    .fa{
        color: #4183D7;
    }
</style>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMES\XAMPP\htdocs\larajob\resources\views/jobs/alljobs.blade.php ENDPATH**/ ?>