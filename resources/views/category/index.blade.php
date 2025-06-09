@extends('app')

@section('content')
    <div id="categories">
        @if($categories->isEmpty())
            Нет категорий
        @else
            @foreach($categories as $category)
                <div class="item">
                    <a href="{{ route('category.show', $category->id) }}">{{ $category->title }}</a>
                </div>
            @endforeach
        @endif
    </div>
@endsection
