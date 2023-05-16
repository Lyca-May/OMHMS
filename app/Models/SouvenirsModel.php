<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SouvenirsModel extends Model
{
    use HasFactory;

    protected $table = 'rent_function_hall';
    protected $fillable = [
        'userid',
        'souvenir_name',
        'souvenir_qty',
        'souvenir_price',
        'souvenir_description',
        'souvenir_municipality',
        'souvenir_status',
    ];

    public function user()
    {
        return $this->belongsTo(users::class);
    }
}
