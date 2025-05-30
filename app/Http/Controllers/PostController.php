<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        // Обращаемся к Модели Post. Запрашиваем у неё все данные из таблицы "posts" (метод "all()")
        $posts = Post::all()->reverse(); // reverse() вывод в обратном порядке

        // Вызов шаблона с передачей ему данных
        return view('index', compact('posts')); // Аргументы ('название шаблона', 'передаваемые данные')
    }

    public function show(Post $post)
    {
        return view('post.item', compact('post'));
    }

    public function create()
    {
        return view('post.create');
    }
    public function store(PostRequest $request)
    {
        $newPost = Post::create($request->validated());
        return redirect()->route('post.show', $newPost->id);
    }
}
