
<form action="{{ route('blog.update', $blog) }}" method="POST">
    @csrf
    @method('PATCH')
    <label for="title">
        {{ __('Post title') }}: <br>
        <input 
            style="margin-bottom: 5px"
            type="text"
            name="title"
            placeholder="{{ __('Enter title')}}"
            value="{{ old('title', $blog->title ) }}"
        >
        @error('title')
            <div style="background: red; color: white; padding: 5px">{{ $message }}</div>
        @enderror
    </label>
    <br>
    <label for="description">
        {{ __('Post description') }}: <br>
        <input 
            style="margin-bottom: 5px"
            type="text"
            name="description"
            placeholder="{{ __('Enter description') }}"
            value="{{ old('description', $blog->description)  }}"
        >
        @error('description')
            <div style="background: red; color: white; padding: 5px">{{ $message }}</div>
        @enderror
    </label>
    <br>
    <label for="body">
        {{ __('Post body') }}: <br>
        <textarea
            style="margin-bottom: 5px"
            name="body"
            id="body"
            cols="30"
            rows="10"
            placeholder="{{ __('Write the content of the post') }}"
        >{{ old('body', $blog->body) }}</textarea>
        @error('body')
            <div style="background: red; color: white; padding: 5px">{{ $message }}</div>
        @enderror
    </label>
    <br>
    <button style="margin-top: 5px" type="submit">{{ __('Update post') }}</button>
    <a href="{{ route('blog.index') }}">Regresar</a>
</form>