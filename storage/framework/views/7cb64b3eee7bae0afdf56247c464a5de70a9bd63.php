;
<?php $__env->startSection('title','about'); ?>;
<?php $__env->startSection('content'); ?>
<p>test secction
</p>
<ul>
<li>test1</li>
<li>test2</li>
</ul>
<?php echo e($message); ?>

<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($item); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo e($id); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\laravel\resources\views/about.blade.php ENDPATH**/ ?>