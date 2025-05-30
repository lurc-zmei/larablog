@extends('app')

@section('content')
    <form action="{{ route('post.store') }}" method="post">
        <div>
            <input type="text" placeholder="Заголовок" name="title" value="{{ old("title") }}">
            @error("title") {{ $message }} @enderror
        </div>
        <div>
            <textarea rows="5" cols="33" placeholder="Краткое описание" name="anons">{{ old("anons") }}</textarea>
            @error("anons") {{ $message }} @enderror
        </div>
        <div>
            <textarea rows="5" cols="33" placeholder="Текст статьи" name="content">{{ old("content") }}</textarea>
            @error("content") {{ $message }} @enderror
        </div>
        @csrf
        <input type="submit" value="Создать пост">
    </form>
@endsection
