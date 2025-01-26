<x-layout>
    <x-adminComponents.adminNavbar>
        <div class="flex-grow overflow-hidden bg-gray-100">

            <div class="bg-gray-100 w-4/5 h-full m-auto  rounded-md overflow-hidden flex flex-col space-y-20">

                <div class="mx-8 mt-8 text-4xl  h-2">Update Product</div>  

                <form class="flex justify-center items-center overflow-hidden bg-white rounded-md h-[70%] w-4/5 m-auto" action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div id="image-Container" class="w-3/5 h-full pt-8 flex flex-col items-center overflow-hidden space-y-4 ">
                            
                                <!-- Show selected image -->
                                <div id="file-preview-container" class=" w-[700px] h-[500px] max-w-4/5 max-h-3/5 overflow-hidden  border-black bg-gray-200 relative">
                                    <img id="file-preview" class="w-full h-full object-cover " src="{{asset('storage/' . $product->image)}}">  
                                </div>
                                <input 
                                    type="file" 
                                    id="file-upload" 
                                    name="image" 
                                    class="mt-3 text-sm text-gray-900 border rounded-lg cursor-pointer dark:bg-gray-100  dark:placeholder-gray-400"
                                    onchange="previewFile()"
                                />
                            
                            @error('image')
                                <span>errorimage</span>
                            @enderror
                        </div>
    
                        <div id="input-Container" class="w-[35%] h-full pt-8 block">
                            <div class="mb-4  flex flex-col">
                                <label class="text-2xl">Product Name</label>
                                <input type="text" name="name" id="name" class="rounded-md h-10 w-4/5 text-xl border border-black mt-2 px-6 m-auto" placeholder="{{$product->name}}">
                                @error('name')
                                <span>errorname</span>
                                @enderror
                            </div>
                            <div class="mb-4 flex flex-col">
                                <label class="text-2xl">Big Price</label>
                                <input type="text" name="big" id="big" class="rounded-md h-10 w-4/5 text-xl border border-black mt-2 px-6 m-auto" placeholder="₱{{$product->big}}">
                                @error('big')
                                <span>errorbig</span>
                                @enderror
                            </div>
                            <div class="mb-4 flex flex-col">
                                <label class="text-2xl">Medium Price</label>
                                <input type="text" name="medium" id="medium" class="rounded-md h-10 w-4/5 text-xl border border-black mt-2 px-6 m-auto" placeholder="₱{{$product->medium}}"> 
                                @error('medium')
                                <span>errormedium</span>
                                @enderror
                            </div>
                            
                            <div class="mb-4 flex flex-col">
                                <label class="text-2xl">Platter Price</label>
                                <input type="text" name="platter" id="platter" class="rounded-md h-10 w-4/5 text-xl border border-black mt-2 px-6 m-auto" placeholder="₱{{$product->platter}}">
                                @error('platter')
                                <span>errorplatter</span>
                                @enderror
                            </div>
                            <div class="mb-6 flex flex-col">
                                <label class="text-2xl">Tub Price</label>
                                <input type="text" name="tub" id="tub" class="rounded-md h-10 w-4/5 text-xl border border-black mt-2 px-6 m-auto" placeholder="₱{{$product->tub}}">
                                @error('tub')
                                <span>errortub</span>
                                @enderror
                            </div>
                            <div class="m-auto text-center ">
                                <button class="border rounded-md bg-green-700 w-32 h-10 text-white" type ="submit">Update Product</button>
                            </div>
                            
                        </div>  
                    </form>
            </div>
        
        </div>
    </x-adminComponents.adminNavbar>
    
    
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
</x-layout>