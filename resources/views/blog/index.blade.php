<x-dashboard>
    <h1>Listado de los blogs:</h1>
    <br>
    @session('status')
        <div>{{ $value }}</div>
    @endsession
    <div style="background: green; width: 200px; padding: 5px; border-radius: 20px; display: flex; justify-content:center; align-items: center">
        <a href="{{ route('blog.create') }}">Crear nuevo post</a>
    </div>
    <ul>
        @foreach ($blogs as $blog)
            <div style="display: flex; align-items: baseline; margin:20px;">
                <li><a href="{{ route('blog.show', $blog) }}">{{ $blog->title }}</a></li>
                <div style="margin-left: 10px; display: flex" >
                    <a style="background: rgb(0, 191, 255); border-radius: 15px; padding: 8px" href="{{ route('blog.edit', $blog )}}">Editar</a>
                    <form action="{{ route('blog.destroy', $blog) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input style="cursor:pointer; margin-left: 8px; background: red; border-radius:15px; padding: 8px" type="submit" value="Eliminar">
                    </form>
                </div>
            </div>
        @endforeach
    </ul>
    <x-slot:sidebar>
        <h2>blog sidebar</h2>
    </x-slot:sidebar>
</x-dashboard>


