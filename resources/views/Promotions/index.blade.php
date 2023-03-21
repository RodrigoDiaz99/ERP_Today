<x-app-layout title="Promociones">
    <div class="px-2 text-gray-800 dark:text-gray-200">
        <div class="bg-white dark:bg-gray-700 py-6 px-3 mb-4 rounded-lg">
            <div class="flex justify-between">
                <h2 class="my-6 text-2xl font-semibold ">
                    Promociones
                </h2>

                <div>
                    <a href="{{ route('promotion.create'); }}" class="flex items-center justify-center flex-1 p-2 bg-green-500 text-white shadow rounded-full">
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
            <h3>Description</h3>
        </div>

        <!-- Main -->
        <div class="bg-gray-100 dark:bg-gray-700 rounded-lg">
            <div class="grid grid-cols-2 lg:grid-cols-4">
                @foreach ($promotions as $promotion)
                
                <div class="max-w-sm w-full sm:w-full lg:w-full py-6 px-3">
                    <div class="bg-white dark:bg-gray-800 shadow-xl rounded-lg overflow-hidden">
                        <div class="bg-cover bg-center h-56 p-4" style="background-image: url(https://via.placeholder.com/450x450)">
                            <div class="flex justify-end">
                                <svg class="h-6 w-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="p-4">
                            <p class="uppercase tracking-wide text-xl font-bold text-gray-700 dark:text-gray-400">{{ $promotion->name }}</p>
                            <p class="uppercase tracking-wide text-lg font-bold text-gray-700 dark:text-gray-400">Producto:{{ $promotion->product->productName }}</p>
                            <p class="text-2xl text-gray-900 dark:text-gray-300">Items: {{ $promotion->items }}</p>
                            <p class="text-sm text-gray-900 dark:text-gray-300">Descuento: {{ $promotion->discount }} {{ $promotion->type}}</p>
                            <p class="text-xl text-gray-900 dark:text-gray-300">Finaliza: {{ $promotion->ending != null ?  $promotion->ending : '-----'}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
