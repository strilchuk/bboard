<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bb extends Model
{
//    use HasFactory; // нужен для тестов
    protected $fillable = ['title', 'content', 'price']; // Поля доступные для массового присваивания, т.е через ассоциативный массив
    // например $bb = $bb->create(['title' => 'Пылесос', 'content' => 'Старый ржавый, без шланга', 'price' => 1000]);

    public function user() {
        return $this->belongsTo(User::class);
    }
}
