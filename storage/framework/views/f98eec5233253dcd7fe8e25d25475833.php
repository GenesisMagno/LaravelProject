
<?php if (isset($component)) { $__componentOriginalc32b5f0f99d6fd03240e7f1eb798bf7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc32b5f0f99d6fd03240e7f1eb798bf7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.adminComponents.adminNavbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('adminComponents.adminNavbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
    <div id="container" class="flex flex-grow overflow-hidden">

        <div class="w-1/5 pt-14">

            <ul class="m-auto 2xl:w-3/5 text-lg">
                <li class="mb-5 lg:text-xl "><i class="fa-solid fa-chart-line mr-3"></i><a href="">Dashboard</a></li>
                <li class="mb-5 xl:text-xl "><i class="fa-solid fa-list-check mr-3"></i><a href="">Manage Products</a></li>
            </ul>
            
        </div>

        <div class="w-4/5 h-screen bg-gray-100 px-24 pt-12">
            <?php if (isset($component)) { $__componentOriginal8a8c15204d11a39e56603300181fd3b1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8c15204d11a39e56603300181fd3b1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.adminComponents.manageProducts','data' => ['products' => $products]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('adminComponents.manageProducts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['products' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($products)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8c15204d11a39e56603300181fd3b1)): ?>
<?php $attributes = $__attributesOriginal8a8c15204d11a39e56603300181fd3b1; ?>
<?php unset($__attributesOriginal8a8c15204d11a39e56603300181fd3b1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8c15204d11a39e56603300181fd3b1)): ?>
<?php $component = $__componentOriginal8a8c15204d11a39e56603300181fd3b1; ?>
<?php unset($__componentOriginal8a8c15204d11a39e56603300181fd3b1); ?>
<?php endif; ?>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc32b5f0f99d6fd03240e7f1eb798bf7c)): ?>
<?php $attributes = $__attributesOriginalc32b5f0f99d6fd03240e7f1eb798bf7c; ?>
<?php unset($__attributesOriginalc32b5f0f99d6fd03240e7f1eb798bf7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc32b5f0f99d6fd03240e7f1eb798bf7c)): ?>
<?php $component = $__componentOriginalc32b5f0f99d6fd03240e7f1eb798bf7c; ?>
<?php unset($__componentOriginalc32b5f0f99d6fd03240e7f1eb798bf7c); ?>
<?php endif; ?>
<?php /**PATH D:\Xampp\htdocs\dashboard\bettertaste\resources\views/admin/admin.blade.php ENDPATH**/ ?>