<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">        

        {{-- <div class="min-h-screen bg-gray-100"> --}}
            {{-- @livewire('navigation-menu') --}}

            {{-- @include('sidebar') --}}
            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

           

            <!-- Page Content -->
            {{-- <main>
                {{ $slot }}
            </main>
        </div> --}}

        <div class="flex h-screen bg-gray-100 font-roboto">
            @include('sidebar')
            
            <div class="flex-1 flex flex-col overflow-hidden">
                @include('header')

                <main class="flex-1 overflow-x-hidden overflow-y-auto ">
                    <div class="mx-auto px-6 pb-6"> {{-- container --}}
                         <!-- Page Heading -->
                        @if (isset($header))
                            <header>
                                <div class=" mx-auto py-4">
                                    {{ $header }}
                                </div>
                            </header>
                        @endif

                        <!-- Page Content -->
                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            
                                    @yield('body')
                            
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
