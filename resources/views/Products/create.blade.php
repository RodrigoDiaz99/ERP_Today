<x-app-layout title="Agregar Producto">
    <div class="px-2 text-gray-700 dark:text-gray-200">
        <div class="bg-white dark:bg-gray-700 py-6 px-3 mb-3 rounded-lg">
            <div class="flex justify-between">
                <h2 class="my-2 text-2xl font-semibold ">
                    Agregar Producto
                </h2>
            </div>
            <h3>Description</h3>
        </div>

        <!-- Main -->
        <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
            <form action="{{ route('product.store') }}"  method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="border-gray-300 dark:border-gray-500 border-2 mb-4 rounded-lg p-4">
                    <label class="font-bold text-2xl">Producto</label>

                    <div class="grid grid-cols-1 sm:grid-cols-3 mt-5 gap-5 mb-3">
                        <div class="flex-grow">
                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="name">
                                Nombre Producto *
                            </label>
                            <input id="name" name="name" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4" value="{{ old('name') }}" type="text" placeholder="Nombre Producto" required autofocus>
                            @error('name')
                                <span class="text-red-500 folt-bold">{{ $errors->first('name') }}</span>
                            @enderror
                        </div>

                        <div class="flex-grow">
                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="category">
                                Categoria Producto *
                            </label>
                            <select id="category" name="category" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4" value="{{ old('category') }}" required>
                                <option value="">SELECCIONE</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <span class="text-red-500 folt-bold">{{ $errors->first('category') }}</span>
                            @enderror
                        </div>

                        <div class="flex-grow">
                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="type">
                                Tipo de Venta *
                            </label>
                            <select id="type" name="type" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4" value="{{ old('type') }}" required>
                                <option value="sale" {{ old('type') == "sale" ? 'selected' : '' }}>Venta</option>
                                <option value="presale" {{ old('type') == "presale" ? 'selected' : '' }}>Preventa</option>
                                <option value="only" {{ old('type') == "only" ? 'selected' : '' }}>Unica Venta</option>
                            </select>
                            @error('type')
                                <span class="text-red-500 folt-bold">{{ $errors->first('type') }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex-grow mb-3">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="description">
                            Descripción *
                        </label>
                        <textarea id="description" rows="7" name="description" class="block w-full text-gray-700 resize-none dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4" type="text" placeholder="Descripción del producto">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="text-red-500 folt-bold">{{ $errors->first('description') }}</span>
                        @enderror
                    </div>

                    <label class="block mt-5 text-sm font-medium">Modelos</label>
                    <div class="rounded-lg dark:border-gray-600 bg-gray-100 dark:bg-gray-800 border px-3 mb-3 pb-6">
                        <div x-data="registro()">
                            <div class="flex justify-between items-center">
                                <button type="button" x-on:click="agregar()" class="flex items-center py-2 px-4 my-4 text-white bg-green-500 hover:bg-green-700 rounded-xl focus:outline-none">
                                    <svg class="mr-2 w-4 h-4 fill-current" viewBox="0 0 448 448" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0"/>
                                    </svg>
                                    <p>Agregar Modelo</p>
                                </button>
                                <div class="px-4 py-2 bg-gray-300 dark:bg-gray-700 rounded-lg">
                                    <p>Total Modelos: <span class="text-red-500 font-bold" x-text="cantidad-1"></span></p>
                                </div>
                            </div>

                            <template x-for="lista in registro" :key="lista.id">
                                <div class="grid grid-cols-1 xl:grid-cols-3 items-center gap-3">
                                    <div class="flex-grow w-full">
                                        <label class="block text-sm font-medium">Imagen Producto</label>
                                        <label for="cover" x-data="imageViewer()" class="flex justify-center px-6 pt-5 pb-6 my-2 rounded-md border-2 border-gray-300 border-dashed cursor-pointer bg-gray-100 dark:bg-gray-800 dark:border-gray-600">
                                            <div class="space-y-1 text-center">
                                                <template x-if="imageUrl" class="text-center">
                                                    <img :src="imageUrl"
                                                        class="object-cover w-full h-56 rounded-md">
                                                </template>
                                                <div x-show="selected">
                                                    <svg class="mx-auto w-12 h-12 text-gray-400 fill-current"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512" width="512" height="512"><title>Add Photo</title>
                                                        <path
                                                            d="M215.255,230.108a43.184,43.184,0,1,0-43.184-43.184A43.233,43.233,0,0,0,215.255,230.108Zm0-70.368a27.184,27.184,0,1,1-27.184,27.184A27.215,27.215,0,0,1,215.255,159.74Z"/>
                                                        <path
                                                            d="M454,338H419V303a8,8,0,0,0-16,0v35H369a8,8,0,0,0,0,16h34v34a8,8,0,0,0,16,0V354h35a8,8,0,0,0,0-16Z"/>
                                                        <path
                                                            d="M472,273.129V121.724C472,95.256,450.209,74,423.741,74H54.753A47.608,47.608,0,0,0,7,121.724V362.829C7,389.3,28.286,411,54.753,411H345.639a93.6,93.6,0,0,0,159.737-66.176C505.376,316.084,492,290.293,472,273.129ZM54.753,90H423.741C441.386,90,456,104.079,456,121.724V262.3a93.081,93.081,0,0,0-44.119-11.016,95.1,95.1,0,0,0-10.46.581L334.4,204.411a8.021,8.021,0,0,0-10.249.822L233.827,294,128.85,242.84a7.764,7.764,0,0,0-7.4.271L23,300.284V121.724A31.591,31.591,0,0,1,54.753,90ZM23,362.829V318.781L125.791,259.09l95.983,46.894L131.231,395H54.753A31.973,31.973,0,0,1,23,362.829ZM154.057,395,330.578,221.42l49.888,35.3a93.737,93.737,0,0,0-62.21,88.17c0,18.4,5.344,35.112,14.557,50.112Zm257.694,27.276a77.5,77.5,0,1,1,77.5-77.495A77.583,77.583,0,0,1,411.751,422.276Z"/>
                                                    </svg>
                                                    <div class="flex text-sm text-gray-600">
                                                        <label class="w-full text-center text-blue-600 hover:text-blue-500" for="cover">Select an image</label>
                                                        <input name="cover" id="cover" type="file" class="sr-only" accept=".png, .jpg, .jpeg" @change="fileChosen">
                                                    </div>
                                                    <p class="text-xs text-gray-500 dark:text-white">
                                                        PNG, JPG, JPEG up to 10M
                                                    </p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="grid grid-cols-5 col-span-2 gap-3">
                                        <div class="flex-grow w-full">
                                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="colors[]">
                                                Color <font color="red">*</font>
                                            </label>
                                            <select id="colors[]" name="colors[]" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4" value="{{ old('color.0') }}" required>
                                                <option value="">SELECCIONE COLOR</option>
                                                @foreach ($colors as $color)
                                                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                                                @endforeach
                                            </select>
                                            @error("color")
                                                <span class="text-red-500 folt-bold">{{ $errors->first("color.0") }}</span>
                                            @enderror
                                        </div>

                                        <div class="flex-grow w-full">
                                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="sex[]">
                                                Para <font color="red">*</font>
                                            </label>
                                            <select id="sex[]" name="sex[]" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4" value="{{ old('sex.0') }}" required>
                                                <option value="">SELECCIONE VARIABLE</option>
                                                <option value="1">Unisex</option>
                                                <option value="2">Niña</option>
                                                <option value="3">Niño</option>
                                                <option value="4">Dama</option>
                                                <option value="5">Caballero</option>
                                            </select>
                                            @error('sex')
                                                <span class="text-red-500 folt-bold">{{ $errors->first('sex.0') }}</span>
                                            @enderror
                                        </div>

                                        <div class="flex-grow w-full">
                                            <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="sizes[]">
                                                Talla <font color="red">*</font>
                                            </label>
                                            <select id="sizes[]" name="sizes[]" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4" value="{{ old('sizes.0') }}" required>
                                                <option value="">SELECCIONE TALLA</option>
                                                @foreach ($sizes as $size)
                                                    <option value="{{ $size->id }}">{{ $size->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('sizes')
                                                <span class="text-red-500 folt-bold">{{ $errors->first('sizes.0') }}</span>
                                            @enderror
                                        </div>

                                        <div class="flex-grow w-full">
                                            <div class="flex-grow">
                                                <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="purchasePrice">
                                                    Precio Compra
                                                </label>
                                                <input name="purchasePrice[]" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="number" value="{{ old('purchasePrice.0') }}" placeholder="0">
                                                @error('min')
                                                    <span class="text-red-500 folt-bold">{{ $errors->first('min') }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="flex-grow w-full">
                                            <div class="flex-grow">
                                                <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="salePrice">
                                                    Precio Venta
                                                </label>
                                                <input name="salePrice[]" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="number" value="{{ old('salePrice.0') }}" placeholder="0">
                                                @error('salePrice')
                                                    <span class="text-red-500 folt-bold">{{ $errors->first('salePrice.0') }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="flex-grow w-full col-span-4">
                                            <div class="flex items-center gap-2">
                                                <div class="grid grid-cols-3 mt-2 gap-5">
                                                    <div class="flex-grow">
                                                        <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="min">
                                                            Minimo
                                                        </label>
                                                        <input name="min[]" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="number" value="{{ old('min.0') }}" placeholder="0">
                                                        @error('min')
                                                            <span class="text-red-500 folt-bold">{{ $errors->first('min.0') }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="flex-grow">
                                                        <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="quantityModel[]">
                                                            Cantidad <font color="red">*</font>
                                                        </label>
                                                        <input name="quantityModel[]" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4" type="number" value="{{ old('quantityModel.0') }}" placeholder="Cantidad Modelo" required>
                                                        @error('quantityModel')
                                                            <span class="text-red-500 folt-bold">{{ $errors->first('quantityModel.0') }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="flex-grow">
                                                        <label class="block uppercase tracking-wide text-xs font-bold mb-1" for="max">
                                                            Maximo
                                                        </label>
                                                        <input name="max[]" class="block w-full text-gray-700 dark:text-gray-400 dark:bg-gray-800 rounded-lg py-2 px-4 mb-3" type="number" value="{{ old('max.0') }}" placeholder="0">
                                                        @error('max')
                                                            <span class="text-red-500 folt-bold">{{ $errors->first('max.0') }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
            
                                                <div class="flex-grow w-30">
                                                    <div class="flex items-center gap-3">
                                                        <div>
                                                            <button x-show="lista.id >= 2" type="button"
                                                                    class="flex items-center justify-items-center px-3 py-12 mt-6 w-full text-white bg-red-500 hover:bg-red-600 rounded-lg btn-small"
                                                                    x-on:click="quitar(lista.id)">
                                                                <svg class="w-3 h-3 fill-current" viewBox="0 0 329.26933 329"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
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
            function registro() {
                return {
                    cantidad: 2,
                    registro: [
                        {
                            id: 1,
                            terminada: true
                        }
                    ],
                    inventory(){
                        
                    },
                    agregar() {
                        //Agregar nuevo form input
                        this.registro.push({
                            id: this.cantidad++,
                            terminada: false
                        });
                    },
                    quitar(eliminarRegistro) {
                        this.registro = this.registro.filter(lista => lista.id != eliminarRegistro)
                        this.cantidad--;
                    }
                }
            }

            function imageViewer() {
                return {
                    imageUrl: '',
                    selected: true,

                    fileChosen(event) {
                        this.fileToDataUrl(event, src => this.imageUrl = src)
                        this.selected = false
                    },

                    fileToDataUrl(event, callback) {
                        if (!event.target.files.length) return

                        let file = event.target.files[0],
                            reader = new FileReader()

                        reader.readAsDataURL(file)
                        reader.onload = e => callback(e.target.result)
                    },
                }
            }
        </script>    
    @endpush
</x-app-layout>
