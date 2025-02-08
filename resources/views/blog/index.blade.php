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
            <div style="display: flex; align-items: baseline; margin:4px;">
                <li><a href="{{ route('blog.show', $blog) }}">{{ $blog->title }}</a></li>
                <div style="margin: 5px; background: rgb(19, 160, 185); padding: 5px; border-radius: 15px; display: flex; justify-content:center;">
                    <a href="{{ route('blog.edit', $blog )}}">Editar</a>
                </div>
            </div>
        @endforeach
    </ul>
    <x-slot:sidebar>
        <h2>blog sidebar</h2>
    </x-slot:sidebar>
</x-dashboard>


