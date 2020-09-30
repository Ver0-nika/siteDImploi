<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <?php if(Auth::user()->user_type=='seeker'): ?>
            <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <small class="badge badge-primary">Position:<br><?php echo e($job->position); ?></small>
                <div class="card-header">Job title:<br><?php echo e($job->title); ?></div>
                
                <div class="card-body">Job description:<br>
                    <?php echo e($job->description); ?>

                </div>
                <div class="card-footer">
                    <span><a href="<?php echo e(route('jobs.show',[$job->id,$job->slug])); ?>">WATCH COMPANY PAGE</a></span>
                    <span class="float-right">Last date:<?php echo e($job->last_date); ?></span>
                </div>
            </div>
            <br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMES\XAMPP\htdocs\larajob\resources\views/home.blade.php ENDPATH**/ ?>