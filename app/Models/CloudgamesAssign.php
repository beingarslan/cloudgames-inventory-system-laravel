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

    public function cloudgamesInventory(){
        return $this->belongsTo(CloudgamesInventory::class, 'id_cloudgame', 'id');
    }

    public function operator(){
        return $this->belongsTo(User::class, 'id_operator', 'id');
    }

    public function shop(){
        return $this->belongsTo(User::class, 'id_shop', 'id');
    }

    public function player(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
