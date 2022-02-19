 <?php if(session('success')): ?>
   <div class="alert alert-success ">
   <?php echo e(session('success')); ?>


     </div>
   <?php endif; ?>

          <?php if(session('danger')): ?>
   <div class="alert alert-danger ">
   <?php echo e(session('danger')); ?>


     </div>
   <?php endif; ?>


   
                    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\dashboard\menusws\resources\views/admin/layouts/message.blade.php ENDPATH**/ ?>