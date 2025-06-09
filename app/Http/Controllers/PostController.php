<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function trashed()
    {
        $posts = Post::onlyTrashed()->get()->reverse(); // reverse() вывод в обратном порядке
        return view('index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('post.item', compact('post'));
    }

    public function create()
    {
        $categories = Category::all();
        return view(view: 'post.create', data: compact('categories'));
    }
    public function store(PostRequest $request)
    {
        $newPost = Post::create($request->validated());
        return redirect()->route('post.show', $newPost->id);
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('post.edit', compact('post', 'categories'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->validated());
        return redirect()->route('post.show', compact('post'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('home');
    }


    public function restore($id)
    {
        Post::withTrashed()->find($id)->restore();
        return back();
    }

    public function destroyHard($id)
    {
        $forceDeleteStatus = Post::where('id', $id)->forceDelete();
        return redirect()->route('home');
    }

}
