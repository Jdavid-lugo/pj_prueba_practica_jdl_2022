<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Compras') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Productos para comprar:
                    <select name="Producto" id="Producto" >
                        <option data-placeholder="true"> Productos</option>
                        @foreach($productos as $id=>$producto)
                            <option value="{{ $producto->id }}">{{ $producto->precio}}&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;  {{ $producto->porcentaje  }} </option>
                        @endforeach
                    </select>                                        
                </div>
            </div>
        </div>
    </div> 
</x-app-layout>
