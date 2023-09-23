<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesRent extends Model
{
    use HasFactory;
    protected $table = 'rent_sales';
    protected $primaryKey = 'rent_sale_id';
    public $timestamps = true;

    protected $fillable = [
        'rent_id',
        'userid',
        'sale_date',
        'total_amount',
        'status',
    ];

    public function rent_hall()
    {
        return $this->belongsTo(Function_Hall::class, 'rent_id','rent_id');
    }

    public function user()
    {
        return $this->belongsTo(users::class,'userid', 'user_id');
    }
}
