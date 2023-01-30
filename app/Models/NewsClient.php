<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class NewsClient extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'news_id',
        'category_id',
        'client_id',
    ];
}
