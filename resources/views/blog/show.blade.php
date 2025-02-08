<x-dashboard>
    <h1>Show post</h1>
    <h4>Titulo:</h4>
    {{ $blog->title }}
    <h4>Descripcion:</h4>
    {{ $blog->description }}
    <h4>Cuerpo:</h4>
    {{ $blog->body }}
    <br>
    <a href="{{ url()->previous() }}">Regresar</a>
</x-dashboard>