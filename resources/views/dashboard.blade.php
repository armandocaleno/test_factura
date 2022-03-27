<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    @section('body')    
        <div class="grid grid-cols-5 gap-4">
            <div class="bg-dark h-20 text-light flex items-center justify-center m-2"><span>Dark</span></div>
            <div class="bg-darkgray h-20 text-light flex items-center justify-center m-2">dark gray</div>
            <div class="bg-light h-20 flex items-center justify-center m-2">light</div>
            <div class="bg-lightblue h-20 flex items-center justify-center m-2">light blue</div>            
            <div class="bg-orange h-20 flex items-center justify-center m-2">orange</div>
        </div>
    @endsection
</x-app-layout>
