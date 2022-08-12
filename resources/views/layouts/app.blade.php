<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'iNvoice') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">        
     
        <div class="flex h-screen bg-gray-100 font-roboto">
            @include('sidebar')
            
            <div class="flex-1 flex flex-col overflow-hidden">
                @include('header')

                <main class="flex-1 overflow-x-hidden overflow-y-auto ">
                    <div class="mx-auto px-6 pb-4"> {{-- container --}}
                         <!-- Page Heading -->
                        @if (isset($header))
                            <header>
                                <div class="mx-auto py-4">
                                    {{ $header }}
                                </div>
                            </header>
                        @endif

                        <!-- Page Content -->                      
                        @yield('body')
                    </div>
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
