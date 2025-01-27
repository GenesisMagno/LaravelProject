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
    <div class="flex flex-col h-screen">
        <nav class="flex w-full min-h-20 bg-neutral-900 items-center justify-end px-48">

        <img src="<?php echo e(asset('images/bettertastelogo.png')); ?>" class="mr-auto h-16 w-24" alt="hello">

        <ul class="flex text-white space-x-4 items-center">
            <li><a href=" <?php echo e(route('products.store')); ?> ">Products</a></li>
            <li><a href="">Purchased</a></li>
            <li class="pr-2"><a href="">About</a></li>
            <?php if(auth()->guard()->guest()): ?>
                <li class="text-xs"><a href="<?php echo e(route('login')); ?>">login | signup</a></li>
            <?php endif; ?>
            
        <?php if(auth()->guard()->check()): ?>
        <li>
            <img id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"  
                src="<?php echo e(asset('images/mangograhams.jpg')); ?>" alt="image" class="ml-2 h-8 w-8 rounded-full">
            
            <div id="dropdownHover" class="z-10 hidden shadow rounded-md w-44 bg-neutral-900 mt-2 ml-5 ">
                <ul class=" text-sm text-gray-700 dark:text-gray-200">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
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
        <?php endif; ?>  

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
<?php endif; ?><?php /**PATH D:\Xampp\htdocs\dashboard\LaravelProject\resources\views/components/navbar.blade.php ENDPATH**/ ?>