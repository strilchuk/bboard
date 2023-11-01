<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bb extends Model
{
//    use HasFactory; // нужен для тестов
    protected $fillable = ['title', 'content', 'price'];
}
