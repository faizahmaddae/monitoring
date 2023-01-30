<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Reflection extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'news_id',
        'media_id',
        'date',
        'begin',
        'end',
        'language',
    ];
}
