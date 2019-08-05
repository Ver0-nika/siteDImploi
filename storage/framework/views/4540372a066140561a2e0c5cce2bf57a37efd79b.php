<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <h1>Recent Jobs</h1>
        <table class="table">
            <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

<style>
    .fa{
        color: #4183D7;
    }
</style>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMES\XAMPP\htdocs\larajob\resources\views/welcome.blade.php ENDPATH**/ ?>