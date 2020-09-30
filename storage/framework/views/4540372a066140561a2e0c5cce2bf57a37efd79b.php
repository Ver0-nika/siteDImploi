<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <search-component></search-component>
        </div>
        <br>
        <br>
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
                        <button class="btn btn-primary">Apply</button>
                    </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div>
        <a href="<?php echo e(route('alljobs')); ?>"><button class="btn btn-outline-primary btn-lg" style="width:100%;">Browse all jobs</button></a>
    </div>
    <br><br>
    <h1>Companies</h1>

</div>

<div class="container">
    <div class="row">
        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
            <div class="card" style="width:18rem;">
                <img src="<?php echo e(asset('uploads/logo')); ?>/<?php echo e($company->logo); ?>" width="80">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($company->cname); ?></h5>
                    <p class="card-text"><?php echo e(str_limit($company->description,20)); ?></p>
                    <a href="<?php echo e(route('company.index',[$company->id,$company->slug])); ?>" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>

<style>
    .fa{
        color: #4183D7;
    }
</style>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMES\XAMPP\htdocs\larajob\resources\views/welcome.blade.php ENDPATH**/ ?>