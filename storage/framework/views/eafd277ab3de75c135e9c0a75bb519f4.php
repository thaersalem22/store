<?php $__env->startSection('title', 'Categories'); ?>
<?php $__env->startSection('content'); ?>
    <div class="py-3">
        <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-success mb-3">إضافة قائمة جديدة</a>
        <table class="table">
            <thead>
                <tr>
                    <th>اسم الصنف</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($category->name); ?></td>
                        <td>
                            <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn btn-success">تعديل</a>
                            <form action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="POST"
                                style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger">حذف</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div style="width='100%';height:30px">
            <?php echo e($categories->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\store_task-main\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>