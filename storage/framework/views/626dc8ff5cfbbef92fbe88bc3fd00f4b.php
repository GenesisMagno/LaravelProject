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
        <div class="flex-grow overflow-hidden bg-gray-100">

            <div class="bg-gray-100 w-4/5 h-full m-auto  rounded-md overflow-hidden flex flex-col space-y-20">

                <div class="mx-8 mt-8 text-4xl  h-2">Update Product</div>  

                <form class="flex justify-center items-center overflow-hidden bg-white rounded-md h-[70%] w-4/5 m-auto" action="<?php echo e(route('products.update',$product->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                        <div id="image-Container" class="w-3/5 h-full pt-8 flex flex-col items-center overflow-hidden space-y-4 ">
                            
                                <!-- Show selected image -->
                                <div id="file-preview-container" class=" w-[700px] h-[500px] max-w-4/5 max-h-3/5 overflow-hidden  border-black bg-gray-200 relative">
                                    <img id="file-preview" class="w-full h-full object-cover " src="<?php echo e(asset('storage/' . $product->image)); ?>">
                                    
                                    
                                </div>
                                <input 
                                    type="file" 
                                    id="file-upload" 
                                    name="image" 
                                    class="mt-3 text-sm text-gray-900 border rounded-lg cursor-pointer dark:bg-gray-100  dark:placeholder-gray-400"
                                    onchange="previewFile()"
                                />
                            
                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span>errorimage</span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
    
                        <div id="input-Container" class="w-[35%] h-full pt-8 block">
                            <div class="mb-4  flex flex-col">
                                <label class="text-2xl">Product Name</label>
                                <input type="text" name="name" id="name" class="rounded-md h-10 w-4/5 text-xl border border-black mt-2 px-6 m-auto" placeholder="<?php echo e($product->name); ?>">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span>errorname</span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-4 flex flex-col">
                                <label class="text-2xl">Big Price</label>
                                <input type="text" name="big" id="big" class="rounded-md h-10 w-4/5 text-xl border border-black mt-2 px-6 m-auto" placeholder="₱<?php echo e($product->big); ?>">
                                <?php $__errorArgs = ['big'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span>errorbig</span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-4 flex flex-col">
                                <label class="text-2xl">Medium Price</label>
                                <input type="text" name="medium" id="medium" class="rounded-md h-10 w-4/5 text-xl border border-black mt-2 px-6 m-auto" placeholder="₱<?php echo e($product->medium); ?>"> 
                                <?php $__errorArgs = ['medium'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span>errormedium</span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            
                            <div class="mb-4 flex flex-col">
                                <label class="text-2xl">Platter Price</label>
                                <input type="text" name="platter" id="platter" class="rounded-md h-10 w-4/5 text-xl border border-black mt-2 px-6 m-auto" placeholder="₱<?php echo e($product->platter); ?>">
                                <?php $__errorArgs = ['platter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span>errorplatter</span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-6 flex flex-col">
                                <label class="text-2xl">Tub Price</label>
                                <input type="text" name="tub" id="tub" class="rounded-md h-10 w-4/5 text-xl border border-black mt-2 px-6 m-auto" placeholder="₱<?php echo e($product->tub); ?>">
                                <?php $__errorArgs = ['tub'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span>errortub</span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="m-auto text-center ">
                                <button class="border rounded-md bg-green-700 w-32 h-10 text-white" type ="submit">Update Product</button>
                            </div>
                            
                        </div>  
                    </form>
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
    
    
    <script>
        function previewFile() {
            const fileInput = document.getElementById('file-upload');
            const filePreview = document.getElementById('file-preview');
            const filePreviewContainer = document.getElementById('file-preview-container');
            const noImageSelected = document.getElementById('noImageSelected');
            
            const file = fileInput.files[0];
            
            if (file) {
                const reader = new FileReader();
    
                reader.onload = function(e) {
                    // Check if the file is an image
                    filePreview.src = e.target.result;
                    filePreviewContainer.classList.remove('border-dashed');
                    
                    
                };
    
                reader.readAsDataURL(file);
            }   
        }
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH D:\Xampp\htdocs\dashboard\bettertaste\resources\views/admin/adminUpdate.blade.php ENDPATH**/ ?>