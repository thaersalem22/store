<?php $__env->startSection('title', 'Create Product'); ?>
<?php $__env->startSection('content'); ?>
    <div class="py-3">
        <form action="<?php echo e(route('products.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="nameFormControlInput" class="form-label"> اسم المنتج </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="اسم المنتج">
            </div>
            <div class="mb-3">
                <label for="quantityFormControlInput" class="form-label"> الكمية </label>
                <input type="text" class="form-control" id="quantity" name="quantity">
            </div>
            <div class="mb-3">
                <label for="priceFormControlInput" class="form-label"> السعر </label>
                <input type="text" class="form-control" id="price" name="price">
            </div>

            <div class="mb-3">
                <label for="descriptionFormControlTextarea1" class="form-label"> وصف المنتج</label>
                <textarea class="form-control" id="desc" name="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="categoryFormControlSelect" class="form-label">اختر الصنف</label>
                <select name="category" id="category" class="form-control" required>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-success" value="حفظ">
                <a class="btn btn-secondary" href="<?php echo e(route('products.index')); ?>">الرجوع</a>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\store_task-main\resources\views/admin/products/create.blade.php ENDPATH**/ ?>