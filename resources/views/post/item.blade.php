@extends('app')

@section('content')

<div id="post_item">
    <h2 class="name">{{ $post->title }}</h2>
    <p>Категория: <a href="{{ route('category.show', $post->category->id) }}">{{ $post->category->title }}</a></p>
    <div class="text">
        {!! $post->content !!}
    </div>
    <div class="btn_area">
        <a href="{{ route('post.edit', $post->id) }}" class="btn">Редактировать</a>
        <form action="{{ route('post.destroy', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn" value="Удалить мягко">
        </form>
        <a href="{{ route('post.delete.hard', $post->id) }}" class="btn">Удалить жестко</a>
    </div>
</div>
@endsection
