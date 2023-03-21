<x-app-layout title="Editar Producto">
    <div class="px-2 text-gray-700 dark:text-gray-200">
        <div class="bg-white dark:bg-gray-700 py-6 px-3 mb-3 rounded-lg">
            <div class="flex justify-between">
                <h2 class="my-6 text-2xl font-semibold ">
                    Ediatar Producto
                </h2>
            </div>
            <h3>Description</h3>
        </div>

        <!-- Main -->
        <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
            <form action="{{ route('product.update', $product->id) }}"  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-1 gap-5 mb-3">
                    <div class="flex-grow">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="name">
                            Nombre Producto *
                        </label>
                        <input id="name" name="name" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4" value="{{ old('name') }}" type="text" placeholder="Nombre Producto" required autofocus>
                    </div>

                    <div class="flex-grow">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="description">
                            Descripción *
                        </label>
                        <textarea id="description" name="description" class="block w-full text-gray-700 resize-none dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4" type="text" placeholder="Descripción del producto">{{ old('description') }}</textarea>
                    </div>
                </div>
            
                <div class="border-gray-300 dark:border-gray-500 border-2 rounded-lg p-6">
                    <label for="Inventory" class="font-bold text-2xl">Inventario</label>
                    <div class="grid grid-cols-3 mt-2 gap-5">
                        <div class="flex-grow">
                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="quantity">
                                Cantidad *
                            </label>
                            <div class="flex items-center">
                                <input id="quantity" name="quantity" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="number" min="0" value="{{ old('quantity') }}" placeholder="Cantidad Producto" required>
                            </div>
                        </div>
                
                        <div class="flex-grow">
                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="min">
                                Minimo
                            </label>
                            <div class="flex items-center">
                                <input id="min" name="min" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="number" min="0" value="{{ old('min') }}" placeholder="0">
                            </div>
                            <p class="text-red-500 text-xs italic">* Este campo puede quedar Vacio</p>
                        </div>
                
                        <div class="flex-grow">
                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="max">
                                Maximo
                            </label>
                            <div class="flex items-center">
                                <input id="max" name="max" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="number" min="0" value="{{ old('max') }}" placeholder="0">
                            </div>
                            <p class="text-red-500 text-xs italic">* Este campo puede quedar Vacio</p>
                        </div>
                    </div>
                
                    <div class="grid grid-cols-2 mt-2 gap-5">
                        <div class="flex-grow">
                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="purchasePrice">
                                Precio Compra
                            </label>
                            <div class="flex items-center">
                                <input id="purchasePrice" name="purchasePrice" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="number" min="0.01" value="{{ old('purchasePrice') }}" step="0.01" placeholder="0">
                            </div>
                            <p class="text-red-500 text-xs italic">* Este campo puede quedar Vacio</p>
                        </div>
                
                        <div class="flex-grow">
                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="salePrice">
                                Precio Venta
                            </label>
                            <div class="flex items-center">
                                <input id="salePrice" name="salePrice" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="number" min="0.01" value="{{ old('salePrice') }}" step="0.01" placeholder="0">
                            </div>
                            <p class="text-red-500 text-xs italic">* Este campo puede quedar Vacio</p>
                        </div>
                    </div>
                </div>

                <div class="border-t mt-6 pt-3">
                    <button type="submit" class="rounded text-gray-100 px-3 py-1 bg-green-500 hover:shadow-inner hover:bg-green-700 transition-all duration-300">
                        Editar
                    </button>
                </div>
            </form>
        </div>
    </div>

    @push('js')
        <script>
            
        </script>    
    @endpush
</x-app-layout>
