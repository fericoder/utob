<?php if($errors->any()): ?>
    <div style="font-family: byekan; color: white!important;" class="alert alert-danger">
        <ul style="font-family: byekan;color: white!important;" >
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH /Users/alirahmani/Projects/utob/resources/views/dashboard/layouts/partials/errors.blade.php ENDPATH**/ ?>