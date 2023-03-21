<nav class="block fixed top-3 z-20 right-2 left-2 bg-white shadow-lg rounded-lg dark:bg-gray-800">
    <div class="px-2 mx-auto sm:px-6 lg:px-8 rounded-lg">
        <div class="flex relative justify-between items-center h-16">
            <div class="flex absolute inset-y-0 left-0 items-center md:hidden">
                <!-- Mobile menu button-->
                <button @click="mobileMenu = !mobileMenu" @keydown.escape="mobileMenu = false" type="button"
                        class="inline-flex justify-center items-center p-2 text-gray-400 rounded-md hover:text-white hover:bg-gray-300 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    <svg x-show="!mobileMenu" class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>

                    <svg x-show="mobileMenu" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <div class="flex flex-1 justify-center items-center md:items-stretch md:justify-start">
                <div class="flex flex-shrink-0 justify-center items-center">
                    <div class="block sm:hidden">
                        {{-- Insertar un logo en svg --}}
                    </div>

                    <div class="hidden sm:block">
                        <div class="flex items-center">
                            {{-- Insertar un logo en svg --}}
                            <span
                                class="pl-3 text-2xl text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                                {{ env('APP_NAME') }}
                            </span>
                        </div>
                    </div>
                </div>
                {{--<div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                         {{--Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white"--}
                        {{--<a href="#" class="py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-md" aria-current="page">Dashboard</a>

                        <a href="#" class="py-2 px-3 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Team</a>

                        <a href="#" class="py-2 px-3 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Projects</a>

                        <a href="#" class="py-2 px-3 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Calendar</a>--}
                    </div>
                </div>--}}
            </div>
            <div class="flex absolute inset-y-0 right-0 items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button
                    class="p-1 text-gray-400 rounded-full hover:bg-gray-300 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                </button>

                <!-- Profile dropdown -->
                <div x-data="{ open: false}" class="relative ml-3">
                    <button x-on:click="open = ! open" type="button"
                            class="flex text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                             alt="{{ Auth::user()->names }}" aria-hidden="true"/>
                    </button>

                    <div x-show="open" @click.away="open = false"
                         class="absolute right-0 py-1 mt-2 w-48 text-gray-700 bg-white rounded-md ring-1 ring-black ring-opacity-5 shadow-lg origin-top-right dark:bg-gray-700 dark:text-gray-300 focus:outline-none"
                         role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="/user/profile"
                           class="flex items-center py-2 px-4 text-sm rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600"
                           role="menuitem" tabindex="-1" id="user-menu-item-0">
                            <svg class="mr-2 w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">

                                <path d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z M256,240
                                    c-57.897,0-105-47.103-105-105c0-57.897,47.103-105,105-105c57.897,0,105,47.103,105,105C361,192.897,313.897,240,256,240z"/>

                                <path d="M423.966,358.195C387.006,320.667,338.009,300,286,300h-60c-52.008,0-101.006,20.667-137.966,58.195
                                    C51.255,395.539,31,444.833,31,497c0,8.284,6.716,15,15,15h420c8.284,0,15-6.716,15-15
                                    C481,444.833,460.745,395.539,423.966,358.195z M61.66,482c7.515-85.086,78.351-152,164.34-152h60
                                    c85.989,0,156.825,66.914,164.34,152H61.66z"/>
                            </svg>
                            Your Profile
                        </a>

                        <form method="POST" action="{{ route('logout') }}"
                              class="rounded-lg hover:bg-red-500 hover:text-white">
                            @csrf
                            <li class="flex">
                                <a class="flex items-center py-2 px-4 w-full text-sm rounded-lg" role="menuitem"
                                   tabindex="-1" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); this.closest('form').submit();">
                                    <svg class="mr-2 w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                         xml:space="preserve">

                                        <path d="M255.15,468.625H63.787c-11.737,0-21.262-9.526-21.262-21.262V64.638c0-11.737,9.526-21.262,21.262-21.262H255.15
                                            c11.758,0,21.262-9.504,21.262-21.262S266.908,0.85,255.15,0.85H63.787C28.619,0.85,0,29.47,0,64.638v382.724
                                            c0,35.168,28.619,63.787,63.787,63.787H255.15c11.758,0,21.262-9.504,21.262-21.262
                                            C276.412,478.129,266.908,468.625,255.15,468.625z"/>

                                        <path d="M505.664,240.861L376.388,113.286c-8.335-8.25-21.815-8.143-30.065,0.213s-8.165,21.815,0.213,30.065l92.385,91.173
                                            H191.362c-11.758,0-21.262,9.504-21.262,21.262c0,11.758,9.504,21.263,21.262,21.263h247.559l-92.385,91.173
                                            c-8.377,8.25-8.441,21.709-0.213,30.065c4.167,4.21,9.653,6.336,15.139,6.336c5.401,0,10.801-2.041,14.926-6.124l129.276-127.575
                                            c4.04-3.997,6.336-9.441,6.336-15.139C512,250.302,509.725,244.88,505.664,240.861z"/>
                                    </svg>
                                    Sign out
                                </a>
                            </li>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<nav class="block fixed top-0 z-10 right-0 left-0 py-10 bg-gray-200 dark:bg-gray-900">

</nav>
