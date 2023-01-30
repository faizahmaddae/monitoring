<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class News extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'headline',
        'summary',
        'date',
        'is_topstory',
        'is_emergency',
    ];
}
