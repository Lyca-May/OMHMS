<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent_Payment_Model extends Model
{
    use HasFactory;

    protected $table = 'rent_payment';

    protected $primaryKey = 'rent_payment_id';

    protected $fillable = [
       'userid',
       'rentid',
        'downpayment',
        'add_service_payment',
        'others_payment',
        'total_payment',
        'full_payment',
        'proof_of_payment',
        'gcash_reference',
    ];

    public function user()
    {
        return $this->belongsTo(users::class, 'userid', 'user_id');
    }
    public function rent_function_hall()
    {
        return $this->belongsTo(users::class, 'rentid', 'rent_id');
    }
}
