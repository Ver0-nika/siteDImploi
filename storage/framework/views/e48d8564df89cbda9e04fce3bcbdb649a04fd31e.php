<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="col-md-12">
        <div class="company-profile">
            <img src="<?php echo e(asset('cover/tumblr-image-sizes-banner.png')); ?>" style="width: 100%;">
            <div class="company-desc">
                <img src="<?php echo e(asset('avatar/man.jpg')); ?>" width="100">
                <p><?php echo e($company->description); ?></p>
                <h1><?php echo e($company->cname); ?></h1>
                <p><strong>Slogan</strong>-<?php echo e($company->slogan); ?>&nbsp; Address-<?php echo e($company->address); ?>&nbsp; Phone-<?php echo e($company->phone); ?>&nbsp; Website-<?php echo e($company->website); ?></p>
            </div>
        </div>

        <table class="table">
            <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $company->jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><img src="<?php echo e(asset('avatar/man.jpg')); ?>" width="80"></td>
                    <td>Position:<?php echo e($job->position); ?>

                        <br>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<?php echo e($job->type); ?>

                    </td>
                    <td><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Address:<?php echo e($job->address); ?></td>
                    <td><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;Date:<?php echo e($job->created_at->diffForHumans()); ?></td>
                    <td>
                    <a href="<?php echo e(route('jobs.show',[$job->id,$job->slug])); ?>">
                        <button class="btn btn-success btn-sm">Apply</button>
                    </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMES\XAMPP\htdocs\larajob\resources\views/company/index.blade.php ENDPATH**/ ?>