<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e($job->title); ?></div>

                <div class="card-body">
                    <p>
                        <h3>Description</h3>
                        <?php echo e($job->description); ?>

                    </p>
                    <p>
                        <h3>Duties</h3>
                        <?php echo e($job->roles); ?>

                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Short Info</div>

                <div class="card-body">
                    <p>Company:<a href="<?php echo e(route('company.index',[$job->company->id,$job->company->slug])); ?>"><?php echo e($job->company->cname); ?></a></p>
                    <p>Address:<?php echo e($job->address); ?></p>
                    <p>Employment Type:<?php echo e($job->type); ?></p>
                    <p>Position:<?php echo e($job->position); ?></p>
                    <p>Date:<?php echo e($job->created_at->diffForHumans()); ?></p>
                </div>
            </div>
            <br>
            <?php if(Auth::check()&&Auth::user()->user_type='seeker'): ?>
            <button class="btn btn-success" style="width: 100%;">Apply</button>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMES\XAMPP\htdocs\larajob\resources\views/jobs/show.blade.php ENDPATH**/ ?>