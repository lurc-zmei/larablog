<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <title>blog</title>
    @vite('resources/css/app.css')
</head>
<body>

<div class="container">
    <header>
        <a href="/" id="logo"><img src="{{-- Vite::asset('resources/images/logo.svg') --}}" alt=""></a>
        <nav>
            <a href="{{ route('home') }}" class="link">Главная</a>
            <a href="{{ route('category.index') }}" class="link">Категории</a>
            <a href="{{ route('post.create') }}" class="link">Новая статья</a>
            <a href="{{ route('post.trashed') }}" class="link">Удаленные статьи</a>
        </nav>
    </header>

    @yield('content')

    <footer>
        &copy; blognalaravel 2025
    </footer>
</div>


</body>
</html>
