<x-app-layout>    
    @section('body')            
        <div class="py-6 px-4">
            <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    
                    <form action="{{ route('factura.enviar') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        
                        <input type="file" name="comprobante" id="comprobante" >

                        <button type="submit">Enviar</button>
                    </form>   
                    
                    {{-- Crear el xml de la factura --}}
                    <form action="{{ route('factura.crear.xml') }}" enctype="multipart/form-data" method="post">
                        @csrf                                                

                        <button type="submit" class="m-4">Crear xml</button>
                    </form>  
                </div>
            </div>
        </div>       
    @endsection
</x-app-layout>