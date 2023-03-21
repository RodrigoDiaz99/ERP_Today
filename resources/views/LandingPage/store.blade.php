<x-store-layout title="Main">
    <div  x-data="{ shoppingCart: false }">
        <nav>
            <div class="border-b border-gray-200">
                <div class="h-16 flex items-center">
                    <div class="ml-auto flex items-center mx-10">
                        <div class="flex lg:ml-6">
                            <div class="flex">
                                <a href="{{ route('login') }}" class="p-2 text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Search</span>
                                    <svg class="w-6 h-6" x-description="Heroicon name: outline/search" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </a>
                            </div>

                            <div class="flex">
                                <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Create account</a>
                            </div> 
                        </div>

        
                        <!-- Search -->
                        <div class="flex lg:ml-6">   
                            <div class="flex">
                                <a href="#" class="p-2 text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Search</span>
                                    <svg class="w-6 h-6" x-description="Heroicon name: outline/search" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
        
                        <!-- Cart -->
                        <div class="ml-4 flow-root lg:ml-6">
                            <button @click="shoppingCart = ! shoppingCart" class="group -m-2 p-2 flex items-center">
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: outline/shopping-bag" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                                <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                                <span class="sr-only">items in cart, view bag</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Todos Nuestros Productos</h2>
        
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($products as $product)
                    <div class="group relative">
                        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $product->productName }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500"></p>
                            </div>
                                <p class="text-sm font-medium text-gray-900">Desde ${{ $product->productModel->first()->inventory->salePrice }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        @include('LandingPage.shoppingCart')
    </div>
</x-store-layout>