<?php

namespace App\Models;

use App\Http\Controllers\Souvenir_Reserved;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    protected $table = 'sales';
    protected $primaryKey = 'sale_id';
    public $timestamps = true;

    protected $fillable = [
        'souvenirReservations_id',
        'userid',
        'sale_date',
        'quantity',
        'price',
        'total_price',
        'status',
    ];

    public function souvenirReservation()
    {
        return $this->belongsTo(Reserved_Souvenir::class, 'souvenirReservations_id','souvenir_reservations_id');
    }

    public function user()
    {
        return $this->belongsTo(users::class,'userid', 'user_id');
    }
}
