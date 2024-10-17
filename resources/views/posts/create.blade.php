<x-app-layout>

    <h1>Formulario para crear un nuevo post</h1>

    {{-- @if ($errors->any())

        <div>
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>

    @endif --}}

    <form action="{{ route('posts.store') }}" method="POST">

        @csrf

        <label for="title">Título:</label>
        <input type="text" name="title" value="{{old('title')}}">

        @error('title')
            <p>{{$message}}</p>
        @enderror

        <br>
        <br>

        <label for="slug">Slug:</label>
        <input type="text" name="slug" value="{{old('slug')}}">

        @error('slug')
            <p>{{$message}}</p>
        @enderror

        <br>
        <br>

        <label for="category">Categoria:</label>
        <input type="text" name="category" value="{{old('category')}}">

        @error('category')
            <p>{{$message}}</p>
        @enderror

        <br>
        <br>

        <label for="content">Contenido:</label>
        <textarea name="content" id="content">{{old('content')}}</textarea>

        @error('content')
            <p>{{$message}}</p>
        @enderror

        <br>
        <br>

        <button type="submit">Crear</button>
    </form>

</x-app-layout>
