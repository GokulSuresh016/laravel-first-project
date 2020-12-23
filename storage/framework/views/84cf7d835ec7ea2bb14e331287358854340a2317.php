;
<?php $__env->startSection('title','post'); ?>;
<?php $__env->startSection('content'); ?>
<?php echo e($post->title); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\laravel\resources\views/posts/posts.blade.php ENDPATH**/ ?>