
<form action="{{ route('blog.store') }}" method="POST">
    @csrf
    <label for="title">
        Titulo del post: <br>
        <input style="margin-bottom: 5px" type="text" name="title" placeholder="Enter title">
        @error('title')
            <div style="background: red; color: white; padding: 5px">{{ $message }}</div>
        @enderror
    </label>
    <br>
    <label for="description">
        Descripcion del post: <br>
        <input style="margin-bottom: 5px" type="text" name="description" placeholder="Enter description">
        @error('description')
            <div style="background: red; color: white; padding: 5px">{{ $message }}</div>
        @enderror
    </label>
    <br>
    <label for="body">
        Cuerpo del post: <br>
        <textarea style="margin-bottom: 5px" name="body" id="body" cols="30" rows="10" placeholder="Escribe el contenido del post"></textarea>
        @error('body')
            <div style="background: red; color: white; padding: 5px">{{ $message }}</div>
        @enderror
    </label>
    <br>
    <button style="margin-top: 5px" type="submit">Crear post</button>
</form>