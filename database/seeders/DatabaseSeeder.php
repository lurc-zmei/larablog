<?php

namespace Database\Seeders;

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
            'post' => [
                [
                    'title' => 'test1',
                    'anons' => 'testanons1',
                    'content' => 'Сегодня <strong>хорошая</strong> погода',
                ],
                [
                    'title' => 'test2',
                    'anons' => 'testanons2',
                    'content' => 'testcontent2',
                ],
            ]
        ];

        foreach ($list['post'] as $item) Post::factory()->create($item);
    }
}
