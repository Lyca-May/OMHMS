<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $table = 'cart_items';
    protected $fillable = [
        'userid',
        'souvenir_id',
        'quantity'
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
