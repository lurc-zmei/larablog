<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 'posts' - название создаваемой таблицы
        Schema::create('posts', function (Blueprint $table) {
            // Список полей в таблице 'posts'
            $table->id();
            $table->string('title');
            $table->text('anons')->nullable(); // nullable() делает поле необязательным для заполнения
            $table->text('content');

            // Внешний ключ на категорию.
            // В constrained() можно явно указать таблицу на которую будет ссылаться внешний ключ.
            // cascadeOnDelete() обеспечит консистентность (ACID) данных, т.е. если категория будет удалена, все посты, которые ей принадлежат тоже будут удалены.
            $table->foreignId('category_id')->constrained()->cascadeOnDelete(); //'categories'

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
