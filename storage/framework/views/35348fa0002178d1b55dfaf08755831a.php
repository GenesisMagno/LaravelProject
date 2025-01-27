<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
    <div class="flex flex-col h-screen overflow-hidden">
        <nav class="flex w-full h-20 bg-white items-center justify-end px-20 shadow shadow-gray-400 z-10 overflow-hidden" >
            <div class="text-3xl font-medium mr-auto pl-12">Admin</div>
            <ul class="text-base flex justify-center items-center gap-2 font-medium">
                <li>Genesis Magno</li>
                <li><img class="h-8 w-8 rounded-full " id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"  
                    src="<?php echo e(asset('images/mangograhams.jpg')); ?>" alt="">
                    <div id="dropdownHover" class="z-10 hidden rounded-md shadow w-44 bg-gray-50 mt-2 ml-5">
                        <ul class=" text-sm text-black">
                            
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                            </li>
                            <li class="rounded-bl-md rounded-br-md">
                                <form class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white rounded-bl-md rounded-br-md" method="POST" action="<?php echo e(route('logout')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" >Log out</button>
                                </form>
                                
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <?php echo e($slot); ?>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH D:\Xampp\htdocs\dashboard\LaravelProject\resources\views/components/adminComponents/adminNavbar.blade.php ENDPATH**/ ?>