<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        /*
                User::factory()->create([
                    'name' => 'Test User',
                    'email' => 'test@example.com',
                ]);
        */
        $list = [
            'category' => [
                ['title' => 'Питание'],
                ['title' => 'Здоровье'],
            ],
            'post' => [
                [
                    'title' => 'Рецепты с гречкой',
                    'anons' => 'testanons 1',
                    'content' => 'Сегодня <strong>хорошая</strong> погода',
                    'category_id' => 1,
                ],
                [
                    'title' => 'Как делать гиперэкстензию',
                    'anons' => 'testanons 2',
                    'content' => 'testcontent 2',
                    'category_id' => 2,
                ],
                [
                    'title' => 'Про капусту',
                    'anons' => 'testanons 3',
                    'content' => 'testcontent 3',
                    'category_id' => 1,
                ],
                [
                    'title' => 'Прыжки со скакалкой',
                    'anons' => 'testanons 4',
                    'content' => 'testcontent 4',
                    'category_id' => 2,
                ],
                [
                    'title' => 'Вечерний моцион',
                    'anons' => 'testanons 5',
                    'content' => 'testcontent 5',
                    'category_id' => 2,
                ],
            ]
        ];

        foreach ($list['category'] as $item) Category::factory()->create($item);
        foreach ($list['post'] as $item) Post::factory()->create($item);
    }
}
