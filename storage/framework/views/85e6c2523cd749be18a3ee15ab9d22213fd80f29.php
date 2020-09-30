<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php if(Session::has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(Session::get('message')); ?>

                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header" style="text-align: center;"><strong>Job title:&nbsp;</strong><?php echo e($job->title); ?></div>

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
                <div class="card-header" style="text-align: center;">SHORT INFO</div>

                <div class="card-body">
                    <p><strong>Company:&nbsp;</strong><a href="<?php echo e(route('company.index',[$job->company->id,$job->company->slug])); ?>"><?php echo e($job->company->cname); ?></a></p>
                    <p><strong>Address:&nbsp;</strong><?php echo e($job->address); ?></p>
                    <p><strong>Employment Type:&nbsp;</strong><?php echo e($job->type); ?></p>
                    <p><strong>Position:&nbsp;</strong><?php echo e($job->position); ?></p>
                    <p><strong>Posted:&nbsp;</strong><?php echo e($job->created_at->diffForHumans()); ?></p>
                    <p><strong>Last date:&nbsp;</strong><?php echo e(date('F d, Y',strtotime($job->last_date))); ?></p>
                </div>
            </div>
            <br>
            <?php if(Auth::check()&&Auth::user()->user_type='seeker'): ?>
            <?php if(!$job->checkApplication()): ?>
            <apply-component :jobid=<?php echo e($job->id); ?>></apply-component>
            <?php endif; ?>
            <br>
            <favorite-component :jobid=<?php echo e($job->id); ?> :favorited=<?php echo e($job->checkSaved()?'true':'false'); ?>></favorite-component>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMES\XAMPP\htdocs\larajob\resources\views/jobs/show.blade.php ENDPATH**/ ?>