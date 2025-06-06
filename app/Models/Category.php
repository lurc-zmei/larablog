<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    // Чтобы от коллекции категории можно было вызвать список коллекций постов, которые ей принадлежат, устанавливаем связь:
    public function posts()
    {
        // Так как категория может обладать множеством постов, применяем связь hasMany()
        return $this->hasMany(Post::class);
    }

}
