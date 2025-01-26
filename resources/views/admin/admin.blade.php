
<x-adminComponents.adminNavbar>
    
    <div id="container" class="flex flex-grow overflow-hidden">

        <div class="w-1/5 pt-14">

            <ul class="m-auto 2xl:w-3/5 text-lg">
                <li class="mb-5 lg:text-xl "><i class="fa-solid fa-chart-line mr-3"></i><a href="">Dashboard</a></li>
                <li class="mb-5 xl:text-xl "><i class="fa-solid fa-list-check mr-3"></i><a href="">Manage Products</a></li>
            </ul>
            
        </div>

        <div class="w-4/5 h-screen bg-gray-100 px-24 pt-12">
            <x-adminComponents.manageProducts :products="$products"/>
        </div>
    </div>

</x-adminComponents.adminNavbar>
