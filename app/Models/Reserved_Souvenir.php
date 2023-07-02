<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserved_Souvenir extends Model
{
    use HasFactory;

    protected $table = 'souvenir_reservations';
    protected $primaryKey = 'souvenir_reservations_id';
    protected $fillable = [
        'userid',
        'souvenir_id',
        'quantity',
        'total_price',
    ];

    public function user()
    {
        return $this->belongsTo(users::class, 'userid', 'user_id');
    }
    public function souvenir()
    {
        return $this->belongsTo(SouvenirsModel::class, 'souvenir_id', 'souvenir_id');
    }
}
