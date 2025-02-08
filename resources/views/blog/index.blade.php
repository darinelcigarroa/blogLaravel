<x-dashboard>
    <p class="text-4xl">Listado de los blogs:</p>
    <br>
    @session('status')
        <div>{{ $value }}</div>
    @endsession
    <div class="max-w-max p-4 rounded-xl cursor-pointer bg-blue-500">
        <a class="w-xs" href="{{ route('blog.create') }}">Crear nuevo post</a>
    </div>
    <ul>
        @foreach ($blogs as $blog)
            <div class="flex mt-2 p-2 items-center">
                <li><a href="{{ route('blog.show', $blog) }}">{{ $blog->title }}</a></li>
                <div class="flex" >
                    <a class="ml-3 bg-cyan-600 rounded-xl p-2" href="{{ route('blog.edit', $blog )}}">Editar</a>
                    <form action="{{ route('blog.destroy', $blog) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input class="ml-3 bg-red-600 rounded-xl p-2" type="submit" value="Eliminar">
                    </form>
                </div>
            </div>
        @endforeach
    </ul>
    <x-slot:sidebar>
        <h2>blog sidebar</h2>
    </x-slot:sidebar>
</x-dashboard>


