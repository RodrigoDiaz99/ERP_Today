<div x-show="mobileMenu" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150"
     x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
     class="flex fixed inset-0 z-20 items-end mt-20 bg-gray-400 bg-opacity-50 dark:bg-black sm:items-center sm:justify-center">
</div>

<aside
    class="overflow-y-auto fixed inset-y-0 z-20 flex-shrink-0 p-1 mt-20 w-full max-w-xs bg-white rounded-lg md:hidden dark:bg-gray-800"
    x-show="mobileMenu" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="mobileMenu = false">
    @include('layouts.menu_data')
</aside>
