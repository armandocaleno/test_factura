<header class="flex items-center justify-between px-6 py-4 bg-gray-50 border-b-2 border-dark shadow-md">
    <div class="flex items-center">
        {{-- lg:hidden --}}
        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none hidden">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>                   
    </div>    

    <div class="hidden lg:flex items-center space-x-4 font-semibold text-lg text-dark">
        <p>Sistema de facturación</p>

        {{-- <img src="{{ asset('/images/favicon/containers.png') }}" width="40" height="40" alt="logo_title">                   --}}
    </div>
    
    <div class="flex items-center">
        <div x-data="{ dropdownOpen: false }"  class="relative">
            <div class="flex items-center space-x-2">
                <div class="hidden sm:block text-right">
                    <div class="text-dark">{{ auth()->user()->name }}</div>                    
                </div>
                <button @click="dropdownOpen = ! dropdownOpen" class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">                   
                    <img class="object-cover w-full h-full" src="{{ auth()->user()->profile_photo_url }}" alt="{{ auth()->user()->name }}">
                </button>
            </div>

            <div x-cloak x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full"></div>

            <template x-if="true">
                <div x-show="dropdownOpen" class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-gray-50 rounded-md shadow-xl">
                    <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-dark hover:bg-dark hover:text-gray-50">Perfil</a>
                   
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf                   
                        <a href="{{ route('logout') }}"  onclick="event.preventDefault(); this.closest('form').submit();" class="block px-4 py-2 text-sm text-dark hover:bg-dark hover:text-gray-50">Cerrar sesión</a>
                    </form>
                </div>
            </template>
        </div>
    </div>
</header>