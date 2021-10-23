@extends('layouts.app')
@section('content')
<header class="interfaz_Principal">
    <div class="titulo_seri">
        <title>Agregar producto</title>
    </div>
    <h1 style="font-size: 30px;" class="font-extrabold  pl-16 ">Agregar Producto</h1>
    <br>
    <br>
</header>

<form action="{{route('pedidos.addNewProduct')}}" method="post">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6 p-4">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label>Precio: </label>
                </div>
                <div class="md:w-2/3">
                    <input type="number" name="Precio" id="Precio" class="appearance-none border rounded py-2 px-15 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-25">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label>Material</label>
                </div>
                <div class="md:w-2/3">
                    <input type="text" name="Material" id="Material" class="appearance-none border rounded py-2 px-15 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label>Nombre</label>
                </div>
                <div class="md:w-2/3">
                    <input type="text" name="Nombre" id="Nombre" class="appearance-none border rounded py-2 px-15 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full">
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label>Categoría: </label>
                </div>
                <div class="md:w-2/3">
                    <input type="text" name="Categoria" id="Categoria" class="appearance-none border rounded py-2 px-15 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label>Diseño </label>
                </div>
                <div class="md:w-2/3">
                    <select name="Diseno" id="Diseno" class="appearance-none border rounded py-2 px-15 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full" onchange="functionDiseno()">
                        <option disabled selected value="">Diseño</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <center>
                <div class="pl-8">
                    <img id="imagenPrevisualizacion" class="pl-2 block h-40 w-32">
                </div><br>
                <div class="pl-16 space-y-4 flex space-x-4 justify-center">
                    <button onclick="document.getElementById('Foto').click()" class=" bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-8 border-b-4 border-blue-700 hover:border-blue-500 rounded ">Agregar</button>
                </div>
            </center>
        </div>
    </div>
</form>

<script type="text/javascript">
    
</script>
@endsection