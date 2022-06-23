<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CloudgamesInventory extends Model
{
    use HasFactory;
    
    protected $table = 'cloudgames_inventory';

    protected $fillable = [
        'id',
        'id_package',
        'online',
        'busy',
        'score',
        'api_port',
        'video_port',
        'audio_port',
        'input_port',
    ];
}
