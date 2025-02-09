<x-dashboard>
    <h1 class="text-5xl">Show post</h1>
    
    <h3 class="text-2xl mt-5">Titulo:</h3>
    <span class="text-gray-400"> 
        {{ $blog->title }}
    </span>

    <h3 class="text-2xl mt-5">Descripcion:</h3>
    <span class="text-gray-400">
        {{ $blog->description }}
    </span>

    <h3 class="text-2xl mt-5">Cuerpo:</h3>
    <span class="text-gray-400">
        {{ $blog->body }}
    </span>

    <div class="bg-cyan-700 w-max p-3 rounded-xl mt-5">
        <a href="{{ url()->previous() }}">Regresar al listado de post</a>
    </div>
</x-dashboard>