<x-layout>
    <div class="flex flex-col h-screen">
        <nav class="flex w-full min-h-20 bg-neutral-900 items-center justify-end px-48">

        <img src="{{ asset('images/bettertastelogo.png') }}" class="mr-auto h-16 w-24" alt="hello">

        <ul class="flex text-white space-x-4 items-center">
            <li><a href=" {{ route('products.store') }} ">Products</a></li>
            <li><a href="">Purchased</a></li>
            <li class="pr-2"><a href="">About</a></li>
            @guest
                <li class="text-xs"><a href="{{ route('login') }}">login | signup</a></li>
            @endguest
            
        @auth
        <li>
            <img id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"  
                src="{{asset('images/mangograhams.jpg')}}" alt="image" class="ml-2 h-8 w-8 rounded-full">
            
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
                        <form class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white rounded-bl-md rounded-br-md" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" >Log out</button>
                        </form>
                        
                    </li>
                </ul>
            </div>
        </li> 
        @endauth  

        </ul>

    </nav>
    {{$slot}}
    </div>
</x-layout>