<div class="w-full h-[90%] overflow-hidden">  
    <div class="flex mb-8">
        <label class="text-3xl font-sans font-[500] antialiased">Manage Product</label>
        <button class="ml-auto bg-green-700 text-white rounded-sm w-40 h-10"><a href="{{ route('products.create') }}" >Add Product</a></button>
    </div>

    <form action="{{ route('searchProducts') }}" method="GET">
        <input class="h-10 w-64 mb-8" type="text" placeholder="Search" name="search" value="{{ request('search') }}">
        <button class="bg-gray-200 h-10 w-12" type="submit"><i class="fa fa-search"></i></button>
    </form>
    

    <div class="overflow-y-auto h-[75%]">
        <table class="w-full text-center border-collapse table-fixed font overflow-auto">
            <tr class="bg-gray-50 sticky top-0">
                <th class="p-3">Name</th>
                <th>Image</th>
                <th>Big</th>
                <th>Medium</th>
                <th>Platter</th>
                <th>Tub</th>
                <th></th>
            </tr>

            @foreach ($products as $product)
                <tr class="bg-white text-sm">
                <td class="p-4">{{$product->name}}</td>
                <td>
                    <img class="h-10 w-10 inline" src="{{asset('storage/' . $product->image)}}" alt="hello">
                </td>
                <td>{{$product->big}}</td>
                <td>{{$product->medium}}</td>
                <td>{{$product->platter}}</td>
                <td>{{$product->tub}}</td>
                <td>
                    <div class="flex justify-center text-center items-center m-auto">
                        <a href="{{route('products.edit',$product->id)}}"><button class="mr-2 bg-gray-100 text-green-700 h-8 w-20"><i class='fas fa-edit '></i>Edit</button></a>
                    
                    <form action="{{route('products.destroy', $product->id)}}" Method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-gray-100 text-red-600 h-8 w-20"><i class='fa fa-trash'></i>Delete</button>
                    </form>
                    </div>  
                </td>
                </tr>
            @endforeach
          
            

        </table>
    </div>
        
</div>