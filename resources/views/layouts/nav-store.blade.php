<div class="w-full z-50 top-0 py-3 sm:py-5 absolute">
    <div class="container flex justify-between items-center">
        <a href="/">
            <img src="{{url('https://res.cloudinary.com/hfakqpuzy/image/upload/v1625275000/TOXIK_2_rspebx.png')}}" class="w-24 lg:w-48" alt="logo image">
        </a>

        <div class="hidden lg:block">
            <ul class="flex items-center">
                <li class="group pl-6">
                   
                </li>
                <li class="group pl-6">
                    <a href="{{route('index')}}" class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Inicio</a>
                    <span class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
                </li>

                <li class="group pl-6">
                    <a href="{{ route('store.index') }}" class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Tienda</a>

                    <span class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
                </li>

                <li class="group pl-6">
                    <a href="#" class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">vacantes</a>

                    <span class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li class="group pl-6">
                            <a href="{{ route('dashboard.index') }}" class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Panel</a>

                            <span class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
                        </li>
                    @else

                        <li class="group pl-6">

                            <a href="{{ route('login') }}" class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Acceder</a>

                            <span class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
                        </li>
                        @if (Route::has('register'))
                            <li class="group pl-6">

                                <a href="{{ route('register') }}" class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Registro</a>

                                <span class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
                            </li>
                        @endif
                    @endauth
                @endif

                <li class="group pl-6">
                    <a href="" class="text-gray-600 focus:outline-none mx-4 sm:mx-0">
                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

        <div class="block lg:hidden">
            <button @click="$parent.mobileMenu = true">
                <svg class="w-6 h-6" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m464.883 64.267h-417.766c-25.98 0-47.117 21.136-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.013-21.137-47.149-47.117-47.149z"/><path d="m464.883 208.867h-417.766c-25.98 0-47.117 21.136-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.013-21.137-47.149-47.117-47.149z"/><path d="m464.883 353.467h-417.766c-25.98 0-47.117 21.137-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.012-21.137-47.149-47.117-47.149z"/></svg>
            </button>
        </div>
    </div>
</div>
