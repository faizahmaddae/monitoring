<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ReflectionKeyword extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'reflection_id',
        'keyword_id',
    ];
}
