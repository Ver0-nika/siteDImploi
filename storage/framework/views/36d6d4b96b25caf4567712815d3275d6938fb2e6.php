<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <?php $__currentLoopData = $applicants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $applicant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card-header"><center><a href="<?php echo e(route('jobs.show',[$applicant->id,$applicant->slug])); ?>"><?php echo e($applicant->title); ?></a></center></div>

                <div class="card-body">
                    <?php $__currentLoopData = $applicant->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <table class="table">
                      
                      <tbody>
                        <tr>
                          <td><strong>Name:&nbsp;</strong><?php echo e($user->name); ?></td>
                          <td><strong>Email:&nbsp;</strong><?php echo e($user->email); ?></td>
                          <td><strong>Address:&nbsp;</strong><?php echo e($user->profile->address); ?></td>
                          <td><strong>Gender:&nbsp;</strong><?php echo e($user->profile->gender); ?></td>
                          <td><strong>Biography:&nbsp;</strong><?php echo e($user->profile->bio); ?></td>
                          <td><strong>Experience:&nbsp;</strong><?php echo e($user->profile->experience); ?></td>
                          <td><a href="<?php echo e(Storage::url($user->profile->resume)); ?>">Resume</a></td>
                          <td><a href="<?php echo e(Storage::url($user->profile->cover_letter)); ?>">Cover letter</a></td>
                        </tr>
                        
                      </tbody>
                    </table>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMES\XAMPP\htdocs\larajob\resources\views/jobs/applicants.blade.php ENDPATH**/ ?>