<x-app-layout title="Productos">
    <div class="px-2 text-gray-800 dark:text-gray-200">
        <div class="bg-white dark:bg-gray-700 py-6 px-3 mb-4 rounded-lg">
            <div class="flex justify-between">
                <h2 class="my-6 text-2xl font-semibold ">
                    Productos
                </h2>

                <div>
                    <a href="{{ route('product.create'); }}" class="flex items-center justify-center flex-1 p-2 bg-green-500 text-white shadow rounded-full">
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
                @foreach ($products as $product)
                    <div class="max-w-sm w-full sm:w-full lg:w-full py-6 px-3">
                        <div class="bg-white dark:bg-gray-800 shadow-xl rounded-lg overflow-hidden">
                            <div class="bg-cover bg-center h-56 p-4" style="background-image: url(https://via.placeholder.com/450x450)">
                                <div class="flex gap-2 justify-end">

                                    <a href="{{ route('product.edit', $product->id) }}" class="px-4 py-2 rounded-lg bg-yellow-400 hover:bg-yellow-600">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">
                                            <g transform="translate(128 128) scale(0.72 0.72)" style="">
                                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)" >
                                                <path d="M 78.922 52.21 L 27.435 0.723 c -0.964 -0.964 -2.526 -0.964 -3.489 0 L 0.723 23.946 c -0.964 0.964 -0.964 2.526 0 3.489 L 52.21 78.922 L 78.922 52.21 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                <path d="M 86.334 89.898 l -31.622 -8.473 l 26.713 -26.713 l 8.473 31.622 C 90.477 88.498 88.498 90.477 86.334 89.898 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    

                                    <form method="POST" action="{{ route('product.destroy', $product->id) }}">
                                        @csrf
                                        @method('DELETE')
    
                                        <button type="submit" class="px-4 py-2 rounded-lg bg-red-600 hover:bg-red-700">
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">
                                                <g transform="translate(128 128) scale(0.72 0.72)" style="">
                                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)" >
                                                    <path d="M 78.052 14.538 H 11.948 c -1.104 0 -2 -0.896 -2 -2 s 0.896 -2 2 -2 h 66.104 c 1.104 0 2 0.896 2 2 S 79.156 14.538 78.052 14.538 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                    <path d="M 57.711 14.538 H 32.289 c -1.104 0 -2 -0.896 -2 -2 V 7.36 c 0 -4.059 3.302 -7.36 7.36 -7.36 h 14.703 c 4.058 0 7.359 3.302 7.359 7.36 v 5.178 C 59.711 13.643 58.815 14.538 57.711 14.538 z M 34.289 10.538 h 21.422 V 7.36 c 0 -1.853 -1.507 -3.36 -3.359 -3.36 H 37.649 c -1.853 0 -3.36 1.507 -3.36 3.36 V 10.538 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                    <path d="M 73.771 19.39 c -0.378 -0.401 -0.904 -0.628 -1.455 -0.628 H 17.685 c -0.551 0 -1.077 0.227 -1.455 0.628 c -0.378 0.4 -0.574 0.939 -0.542 1.489 l 3.637 62.119 C 19.555 86.924 22.816 90 26.75 90 h 36.499 c 3.934 0 7.195 -3.076 7.427 -7.003 l 3.637 -62.119 C 74.344 20.329 74.148 19.79 73.771 19.39 z M 32.777 76.099 c -0.04 0.003 -0.079 0.004 -0.119 0.004 c -1.051 0 -1.933 -0.82 -1.995 -1.883 l -2.29 -39.114 c -0.064 -1.103 0.777 -2.049 1.88 -2.113 c 1.088 -0.062 2.049 0.777 2.113 1.88 l 2.29 39.113 C 34.721 75.088 33.88 76.034 32.777 76.099 z M 47 74.103 c 0 1.104 -0.896 2 -2 2 s -2 -0.896 -2 -2 V 34.989 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 V 74.103 z M 59.336 74.22 c -0.062 1.063 -0.943 1.883 -1.994 1.883 c -0.039 0 -0.079 -0.001 -0.119 -0.004 c -1.103 -0.064 -1.944 -1.011 -1.879 -2.113 l 2.29 -39.113 c 0.063 -1.103 0.993 -1.952 2.113 -1.88 c 1.103 0.064 1.944 1.011 1.88 2.113 L 59.336 74.22 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                </g>
                                                </g>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="uppercase text-2xl tracking-wide font-bold text-gray-700 dark:text-gray-400">{{ $product->productName }}</p>
                                <p class="text-sm text-gray-900 uppercase dark:text-gray-300">Modelos: {{ $product->productModel->count() }}</p>
                                <p class="text-sm text-gray-900 uppercase dark:text-gray-300">Description: {{ $product->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
