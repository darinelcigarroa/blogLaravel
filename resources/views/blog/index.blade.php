<x-dashboard>
    <h1>Listado de los blogs:</h1>
    <br>
    @session('status')
        <div>{{ $value }}</div>
    @endsession
    <a href="{{ route('blog.create') }}">Crear nuevo post</a>
    <ul>
        @foreach ($blogs as $blog)
            <li><a href="{{ route('blog.show', $blog) }}">{{ $blog->title }}</a></li>    
        @endforeach
    </ul>
    <x-slot:sidebar>
        <h2>blog sidebar</h2>
    </x-slot:sidebar>
</x-dashboard>


