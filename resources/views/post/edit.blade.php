@extends('app')

@section('content')
    <form action="{{ route('post.update', $post->id) }}" method="post">
        <div>
            <input type="text" placeholder="Заголовок" name="title" value="{{ $post->title }}">
            @error("title") {{ $message }} @enderror
        </div>
        <div>
            <textarea rows="5" cols="33" placeholder="Краткое описание" name="anons">{{ $post->anons }}</textarea>
            @error("anons") {{ $message }} @enderror
        </div>
        <div>
            <textarea rows="5" cols="33" placeholder="Текст статьи" name="content">{{ $post->content }}</textarea>
            @error("content") {{ $message }} @enderror
        </div>
        <div>
            <select name="category_id" id="">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if($category->id == $post->category_id) selected @endif>{{ $category->title }}</option>
                @endforeach
            </select>
            @error("category_id") {{ $message }} @enderror
        </div>
        @csrf
        @method('patch')
        <input type="submit" value="Изменить пост">
    </form>
@endsection
