<x-app-layout title="Agregar Promoción">
    <div class="px-2 text-gray-700 dark:text-gray-200">
        <div class="bg-white dark:bg-gray-700 py-6 px-3 mb-3 rounded-lg">
            <div class="flex justify-between">
                <h2 class="my-6 text-2xl font-semibold ">
                    Agregar Promoción
                </h2>
            </div>
            <h3>Description</h3>
        </div>

        <!-- Main -->
        <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
            <form action="{{ route('promotion.store') }}"  method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-3">
                    <div class="flex-grow">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="product">
                            Producto *
                        </label>
                        <select id="product" name="product" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4" required autofocus>
                            <option value="">SELECCIONE</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->productName }}</option>
                            @endforeach
                        </select>
                        @error('product')
                            <span class="text-red-500 folt-bold">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex-grow">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="name">
                            Nombre Promoción *
                        </label>
                        <input id="name" name="name" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4" value="{{ old('name') }}" type="text" placeholder="Nombre Promoción" required>
                        @error('name')
                            <span class="text-red-500 folt-bold">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-3">
                    <div class="flex-grow mb-3">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="description">
                            Descripción de la Promoción *
                        </label>
                        <textarea id="description" name="description" class="block w-full text-gray-700 resize-none dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4" placeholder="Descripción del producto">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="text-red-500 folt-bold">{{ $message }}</span>
                        @enderror
                    </div>
    
                    <div class="flex-grow mb-3">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="instructions">
                            Instrucciones de la Promoción *
                        </label>
                        <textarea id="instructions" name="instructions" class="block w-full text-gray-700 resize-none dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4" placeholder="Instrucciones de la promoción">{{ old('instructions') }}</textarea>
                        @error('instructions')
                            <span class="text-red-500 folt-bold">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            

                <div class="grid grid-cols-1 sm:grid-cols-2 mt-2 gap-5 mb-3">
                    <div class="flex-grow">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="flex-grow">
                                <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="discount">
                                    Descuento *
                                </label>
                                <div class="flex items-center">
                                    <input id="discount" name="discount" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="number" min="0" value="{{ old('discount') }}" placeholder="Descuento" required>
                                    @error('discount')
                                        <span class="text-red-500 folt-bold">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                    
                            <div class="flex-grow">
                                <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="min">
                                    Tipo Descuento
                                </label>
                                <select id="type" name="type" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="number" min="0" value="{{ old('type') }}">
                                    <option value="">SELECCIONE</option>
                                    <option value="percentage">Porcentaje</option>
                                    <option value="item">Por Unidad</option>
                                </select>
                                @error('type')
                                    <span class="text-red-500 folt-bold">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
            
                    <div class="flex-grow">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-3">
                            <div class="flex-grow">
                                <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="items">
                                    Total de Productos en promoción
                                </label>
                                <input id="items" name="items" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="number" value="{{ old('items') }}" placeholder="0">
                                @error('items')
                                    <span class="text-red-500 folt-bold">{{ $message }}</span>
                                @enderror
                                <p class="text-yellow-400 text-xs italic">* Este campo puede quedar Vacio, si la promoción no tendrá un total de productos</p>
                            </div>

                            <div class="flex-grow">
                                <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="ending">
                                    Fecha de Finalización
                                </label>
                                <input id="ending" name="ending" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="date" value="{{ old('ending') }}">
                                @error('ending')
                                    <span class="text-red-500 folt-bold">{{ $message }}</span>
                                @enderror
                                <p class="text-yellow-400 text-xs italic">* Este campo puede quedar Vacio, si la promoción no tendrá fin</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-t mt-6 pt-3">
                    <button type="submit" class="rounded text-gray-100 px-3 py-1 bg-green-500 hover:shadow-inner hover:bg-green-700 transition-all duration-300">
                        Guardar
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
