@extends('app')

@section('content')
    {{ dump($posts) }}
<div id="post_list">
    @foreach($posts as $post)
    <div class="item">
        <div class="preview_area">
            <img src="{{-- Vite::asset('resources/images/post/1.jpg') --}}" class="bimg" alt="">
        </div>
        <div class="category_area">
            <a href="">Питание</a>
            <span class="published_at">20 апреля 2025, в 16:45</span>
        </div>
        <h2 class="name"><a href="#">{{ $post->title }}</a></h2>
        <div class="tag_area">
            <a href="" class="tag">новости</a>
            <a href="" class="tag">хроника</a>
            <a href="" class="tag">здоровье</a>
        </div>
        <div class="anons">
            {{ $post->anons }}
        </div>
        <a href="" class="more">Read more</a>
    </div>
    @endforeach
{{--
    <div class="item">
        <div class="preview_area">
            <img src="{{ Vite::asset('resources/images/post/2.jpg') }}" class="bimg" alt="">
        </div>
        <div class="category_area">
            <a href="">Питание</a>
            <span class="published_at">20 апреля 2025, в 16:45</span>
        </div>
        <h2 class="name"><a href="#">Lorem ipsum dolor sit, amet</a></h2>
        <div class="tag_area">
            <a href="" class="tag">новости</a>
            <a href="" class="tag">хроника</a>
            <a href="" class="tag">здоровье</a>
        </div>
        <div class="anons">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit adipisci a sequi, sapiente dolores voluptas voluptatem error vero modi, mollitia quisquam vel amet labore doloremque officia quidem doloribus earum esse?
        </div>
        <a href="" class="more">Read more</a>
    </div>
    <div class="item">
        <div class="preview_area">
            <img src="{{ Vite::asset('resources/images/post/3.jpg') }}" class="bimg" alt="">
        </div>
        <div class="category_area">
            <a href="">Питание</a>
            <span class="published_at">20 апреля 2025, в 16:45</span>
        </div>
        <h2 class="name"><a href="#">Lorem ipsum dolor sit, amet</a></h2>
        <div class="tag_area">
            <a href="" class="tag">новости</a>
            <a href="" class="tag">хроника</a>
            <a href="" class="tag">здоровье</a>
        </div>
        <div class="anons">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit adipisci a sequi, sapiente dolores voluptas voluptatem error vero modi, mollitia quisquam vel amet labore doloremque officia quidem doloribus earum esse?
        </div>
        <a href="" class="more">Read more</a>
    </div>
--}}
</div>
@endsection
