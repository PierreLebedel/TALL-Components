<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-stretch h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" wire:navigate class="text-gray-800 dark:text-gray-200 text-lg font-bold">
                        {{ config('app.name') }}
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:-my-px md:ms-10 md:flex">
                    <x-demo.nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                        {{ __('Home') }}
                    </x-demo.nav-link>
                    <x-demo.nav-link :href="route('forms')" :active="request()->routeIs('forms')" wire:navigate>
                        {{ __('Forms') }}
                    </x-demo.nav-link>
                    <x-demo.nav-link :href="route('modals')" :active="request()->routeIs('modals')" wire:navigate>
                        {{ __('Modals') }}
                    </x-demo.nav-link>
                    <x-demo.nav-link :href="route('buttons')" :active="request()->routeIs('buttons')" wire:navigate>
                        {{ __('Buttons') }}
                    </x-demo.nav-link>
                    <x-demo.nav-link :href="route('dropdowns')" :active="request()->routeIs('dropdowns')" wire:navigate>
                        {{ __('Dropdowns') }}
                    </x-demo.nav-link>
                    <x-demo.nav-link :href="route('alerts')" :active="request()->routeIs('alerts')" wire:navigate>
                        {{ __('Alerts') }}
                    </x-demo.nav-link>
                    
                </div>

                
            </div>

            <div class="flex">
                <div class="flex items-center">
                    <x-button href="https://github.com" target="_blank">GitHub</x-button>
                </div>
    
                <!-- Hamburger -->
                <div class="-me-2 flex items-center md:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-demo.responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                {{ __('Home') }}
            </x-demo.responsive-nav-link>
            <x-demo.responsive-nav-link :href="route('forms')" :active="request()->routeIs('forms')" wire:navigate>
                {{ __('Forms') }}
            </x-demo.responsive-nav-link>
            <x-demo.responsive-nav-link :href="route('buttons')" :active="request()->routeIs('buttons')" wire:navigate>
                {{ __('Buttons') }}
            </x-demo.responsive-nav-link>
            <x-demo.responsive-nav-link :href="route('dropdowns')" :active="request()->routeIs('dropdowns')" wire:navigate>
                {{ __('Dropdowns') }}
            </x-demo.responsive-nav-link>
            <x-demo.responsive-nav-link :href="route('modals')" :active="request()->routeIs('modals')" wire:navigate>
                {{ __('Modals') }}
            </x-demo.responsive-nav-link>
            <x-demo.responsive-nav-link :href="route('alerts')" :active="request()->routeIs('alerts')" wire:navigate>
                {{ __('Alerts') }}
            </x-demo.responsive-nav-link>
           
        </div>
    </div>
</nav>
