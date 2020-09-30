<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="text-align: center;">My JOBS</div>

                <div class="card-body">
                    
                    <table class="table">
            
                        <tbody>
                            <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                
                                    <?php if(empty(Auth::user()->company->logo)): ?>
                                    <img src="<?php echo e(asset('cover/logo_unknown.png')); ?>" width="80">
                                    <?php else: ?>
                                    <img src="<?php echo e(asset('uploads/logo')); ?>/<?php echo e(Auth::user()->company->logo); ?>" width="80">
                                    <?php endif; ?>
                                
                                </td>
                                <td><strong>Position:</strong><?php echo e($job->position); ?>

                                    <br>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<?php echo e($job->type); ?>

                                </td>
                                <td><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<strong>Address:</strong><?php echo e($job->address); ?></td>
                                <td><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;<strong>Date:</strong><?php echo e($job->created_at->diffForHumans()); ?></td>
                                <td>
                                <a href="<?php echo e(route('jobs.show',[$job->id,$job->slug])); ?>"><button class="btn btn-primary">Apply</button></a>
                                <a href="<?php echo e(route('job.edit',[$job->id])); ?>"><button class="btn btn-outline-primary">Edit</button></a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMES\XAMPP\htdocs\larajob\resources\views/jobs/myjob.blade.php ENDPATH**/ ?>