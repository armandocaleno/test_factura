<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Factura
        </h2>
    </x-slot> --}}
    @section('body')            
        <div class="py-12 px-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    
                    <form action="{{ route('factura.enviar') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        
                        <input type="file" name="comprobante" id="comprobante" >

                        <button type="submit">Enviar</button>
                    </form>
                    
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>