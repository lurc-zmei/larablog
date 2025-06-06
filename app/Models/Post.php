<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = []; // Разрешаем создавать записи (новые посты)

    // Чтобы от коллекции поста можно было вызвать коллекцию по категории к которой поста принадлежит, устанавливаем связь:
    public function category()
    {
        // Так как пост может принадлежать только к одной категории, применяем связь belongsTo()
        return $this->belongsTo(Category::class);
    }





    public function getCreatedRuAttribute()
    {
        return Carbon::parse($this->created_at)->translatedFormat('d F Y / H:i');
    }

}
