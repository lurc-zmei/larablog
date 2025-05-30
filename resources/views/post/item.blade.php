@extends('app')

@section('content')
<div id="post_item">
    <h2 class="name">{{ $post->title }}</h2>
    <div class="text">
        {{ $post->content }}
    </div>
    <form action="{{ route('post.destroy', $post->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Удалить статью">
    </form>
</div>
@endsection
