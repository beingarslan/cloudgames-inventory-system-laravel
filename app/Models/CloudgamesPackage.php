<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CloudgamesPackage extends Model
{
    use HasFactory;

    protected $table = 'cloudgames_packages';

    protected $fillable = [
        'id',
        'brand',
        'name',
        'id_game',
        'games',
        'screens',
        'resolution',
        'aspect_ratio',
    ];

    
}
