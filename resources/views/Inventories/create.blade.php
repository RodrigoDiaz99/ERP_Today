<x-app-layout title="Agregar Inventario">
    <div class="px-2 text-gray-700 dark:text-gray-200">
        <div class="bg-white dark:bg-gray-700 py-6 px-3 mb-3 rounded-lg">
            <div class="flex justify-between">
                <h2 class="my-6 text-2xl font-semibold ">
                    Agregar Inventario
                </h2>
            </div>
            <h3>Description</h3>
        </div>

        <!-- Main -->
        <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
            <form action="{{ route('inventory.store') }}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="border-gray-300 dark:border-gray-500 border-2 mb-4 rounded-lg p-4">
                    <label class="font-bold text-2xl">Producto</label>
                    <div class="grid grid-cols-1 xl:grid-cols-2 gap-5">
                        <div class="flex-grow">
                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="product">
                                Producto *
                            </label>
                            <select id="product" name="product" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4" value="{{ old('product') }}" required autofocus>
                                <option value="">SELECCIONE</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}" {{ old('product') == $product->id ? 'selected' : '' }}>{{ $product->productName }}</option>
                                @endforeach
                            </select>
                            @error('product')
                                <span class="text-red-500 folt-bold">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex-grow">
                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="type">
                                Tipo de Venta *
                            </label>
                            <select id="type" name="type" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4" value="{{ old('type') }}" required>
                                <option value="sale" {{ old('type') == "venta" ? 'selected' : '' }}>Venta</option>
                                <option value="presale" {{ old('type') == "preventa" ? 'selected' : '' }}>Preventa</option>
                                <option value="only" {{ old('type') == "venta" ? 'selected' : '' }}>Unica Venta</option>
                            </select>
                            @error('type')
                                <span class="text-red-500 folt-bold">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            
                <div class="border-gray-300 dark:border-gray-500 border-2 rounded-lg p-4">
                    <label class="font-bold text-2xl">Inventario</label>
                    <div class="flex items-center gap-2">
                        <label for="alert" class="text-blue-500 font-bold">Activar Alertas Inventario:</label>
                        <input id="alert" name="alert" type="checkbox" {{ old('alert') == 'on' ? 'checked' : '' }} class="rounded-md" value="on">
                    </div>
                    
                    <div class="grid grid-cols-3 mt-2 gap-5">
                        <div id="divMin" class="flex-grow" {{ old('alert') != 'on' ? 'hidden' : 'required' }}>
                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="min">
                                Minimo
                            </label>
                            <input id="min" name="min" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="number" value="{{ old('min') }}" {{ old('alert') == 'on' ? 'required' : '' }} placeholder="0">
                            @error('min')
                                <span class="text-red-500 folt-bold">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex-grow">
                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="quantity">
                                Cantidad *
                            </label>
                            <input id="quantity" name="quantity" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="number" value="{{ old('quantity') }}" placeholder="Cantidad Producto" required>
                            @error('quantity')
                                <span class="text-red-500 folt-bold">{{ $message }}</span>
                            @enderror
                        </div>
                
                        <div id="divMax" class="flex-grow" {{ old('alert') != 'on' ? 'hidden' : '' }}>
                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="max">
                                Maximo
                            </label>
                            <input id="max" name="max" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="number" value="{{ old('max') }}" {{ old('alert') == 'on' ? 'required' : '' }} placeholder="0">
                            @error('max')
                                <span class="text-red-500 folt-bold">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                
                    <div class="flex items-center gap-2">
                        <label for="prices" class="text-blue-500 font-bold">Activar Precios:</label>
                        <input id="prices" name="prices" type="checkbox" {{ old('prices') == 'on' ? 'checked' : '' }} class="rounded-md" value="on">
                    </div>
                    <div class="grid grid-cols-2 mt-2 gap-5">
                        <div id="divPurchasePrice" class="flex-grow" {{ old('prices') != 'on' ? 'hidden' : '' }}>
                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="purchasePrice">
                                Precio Compra
                            </label>
                            <input id="purchasePrice" name="purchasePrice" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="number" value="{{ old('purchasePrice') }}" {{ old('prices') == 'on' ? 'required' : '' }} step="0.01" placeholder="0">
                            @error('purchasePrice')
                                <span class="text-red-500 folt-bold">{{ $message }}</span>
                            @enderror
                        </div>
                
                        <div id="divSalePrice" class="flex-grow" {{ old('prices') != 'on' ? 'hidden' : '' }}>
                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="salePrice">
                                Precio Venta
                            </label>
                            <input id="salePrice" name="salePrice" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="number" value="{{ old('salePrice') }}" {{ old('prices') == 'on' ? 'required' : '' }} step="0.01" placeholder="0">
                            @error('salePrice')
                                <span class="text-red-500 folt-bold">{{ $message }}</span>
                            @enderror
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
            // Inventory alerts
            var check = document.getElementById('alert');
            var min = document.getElementById('min');
            var max = document.getElementById('max');
            var divMin = document.getElementById("divMin");
            var divMax = document.getElementById("divMax");

            check.addEventListener( 'change', function() {
                if(!this.checked) {
                    min.disabled = true;
                    min.required = false;
                    divMin.hidden = true;

                    max.disabled = true;
                    max.required = false;
                    divMax.hidden = true;
                }else {
                    min.disabled = false;
                    min.required = true;
                    divMin.hidden = false

                    max.disabled = false;
                    max.required = true;
                    divMax.hidden = false;
                }
            });

            // Inventory Prices
            var checkPrices = document.getElementById('prices');
            var purchasePrice = document.getElementById('purchasePrice');
            var salePrice = document.getElementById('salePrice');
            var divPurchasePrice = document.getElementById("divPurchasePrice");
            var divSalePrice = document.getElementById("divSalePrice");

            checkPrices.addEventListener( 'change', function() {
                if(!this.checked) {
                    purchasePrice.disabled = true;
                    purchasePrice.required = false;
                    divPurchasePrice.hidden = true;

                    salePrice.disabled = true;
                    salePrice.required = false;
                    divSalePrice.hidden = true;
                }else {
                    purchasePrice.disabled = false;
                    purchasePrice.required = true;
                    divPurchasePrice.hidden = false

                    salePrice.disabled = false;
                    salePrice.required = true;
                    divSalePrice.hidden = false;
                }
            });
        </script>    
    @endpush
</x-app-layout>
