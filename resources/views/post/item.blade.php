@extends('app')

@section('content')
<div id="post_item">
    <h2 class="name">{{ $post->title }}</h2>
    <div class="text">
        {{ $post->content }}
    </div>
</div>
@endsection
