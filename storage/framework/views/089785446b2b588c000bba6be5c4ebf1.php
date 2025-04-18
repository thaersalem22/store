<?php $__env->startSection('title', 'Create Category'); ?>
<?php $__env->startSection('content'); ?>
    <div class="py-3">
        <form action="<?php echo e(route('categories.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="nameFormControlInput" class="form-label"> اسم الصنف </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="اسم الصنف">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-success" value="حفظ">
                <a class="btn btn-secondary" href="<?php echo e(route('categories.index')); ?>">الرجوع</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\store_task-main\resources\views/admin/categories/create.blade.php ENDPATH**/ ?>