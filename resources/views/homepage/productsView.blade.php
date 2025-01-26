<x-navbar>
    <div class="flex-grow ">
        <div class="w-3/5 m-auto h-full flex items-center">

            <div class=" h-full w-[50%] flex">
                <img src="{{ asset('storage/' . $product->image) }}" alt="" class="h-3/5 w-full m-auto object-cover">
            </div>
            <div class="bg-red-200 h-3/5 w-[40%] block text-center">
                <p class="text-3xl m-auto mb-4 pt-10    font-medium">{{$product->name}}</p>
                <p class="text-xl m-auto">₱{{$product->tub}}</p>
            </div>
        </div>

    </div>
</x-navbar>

   
    