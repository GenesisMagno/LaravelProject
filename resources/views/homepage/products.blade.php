
<x-navbar>
    
    <div class="w-full" id="Container">

        <div class="ml-48 my-16"><label class="text-4xl font-sans font-medium antialiased">Products</label></div>

        <div class="h-auto w-4/5 m-auto mt-3 flex flex-wrap justify-center  gap-x-16 gap-y-4">

            @foreach ($products as $product)
                <div style="width:25%" class="bg-white h-96 text-center" >
                    <a href="{{route('products.show',$product->id)}}">
                        <img src="{{ asset('storage/' . $product->image) }}" class="h-4/5 w-full object-cover mb-4">
                    <span class="text-xl font-medium mr-3">{{$product->name}}</span><span class="text-sm font-medium">₱-{{$product->tub}}</span>
                    </a>
                </div>
                
            @endforeach
                
           
            
            
        </div>

    </div>
</x-navbar>