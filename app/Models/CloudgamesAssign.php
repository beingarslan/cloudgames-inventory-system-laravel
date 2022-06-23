<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CloudgamesAssign extends Model
{
    use HasFactory;

    protected $table= 'cloudgames_assign';

    protected $fillable = [
        'id',
        'family',
        'id_operator',
        'id_cloudgame',
        'id_shop',
        'id_user',
        'locked',
    ];
}
