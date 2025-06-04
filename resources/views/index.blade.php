@extends('app')

@section('content')
<div id="post_list">
    @if($posts->isEmpty())
        Нет статей
    @else
        @foreach($posts as $post)
        <div class="item">
            <div class="preview_area">
                <img src="{{-- Vite::asset('resources/images/post/1.jpg') --}}" class="bimg" alt="">
            </div>
            <div class="category_area">
                <a href="">Питание</a>
                <span class="published_at">{{ $post->created_ru }}</span>
                @if($post->deleted_at)
                    <a href="{{ route('post.restore', $post->id) }} " class="btn">Восстановить</a>

                @endif
            </div>
            <h2 class="name"><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h2>
            <div class="tag_area">
                <a href="" class="tag">новости</a>
                <a href="" class="tag">хроника</a>
                <a href="" class="tag">здоровье</a>
            </div>
            <div class="anons">
                {{ $post->anons }}
            </div>
            <a href="{{ route('post.show', $post->id) }}" class="more">Read more</a>
        </div>
        @endforeach
    @endif
</div>
@endsection
