<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Function_Hall extends Model
{
    use HasFactory;

    protected $table = 'rent_hall';

    protected $primaryKey = 'rent_id';

    protected $fillable = [
        'userid',
        'rentid',
        'contact_person',
        'contact_number',
        'agency',
        'date_requested',
        'event_start',
        'event_type',
        'prep_setup_time',
        'date_of_setup',
        'others',
        'sound_system',
        'led_tv',
        'microphones',
        'number_of_microphones',
        'stands',
        'number_of_stands',
        'tables',
        'number_of_tables',
        'chairs',
        'number_of_chairs',
        'recorded_date',
        'recorded_by',
        'approved_by',
        'downpayment',
        'add_service_payment',
        'others_payment',
        'full_payment',
        'total_payment',
        'status',
        'recordedby_esign',
        'approvedby_esign',
    ];

    public function user()
    {
        return $this->belongsTo(users::class, 'userid', 'user_id');
    }
    // public function rent_payment()
    // {
    //     return $this->belongsTo(users::class, 'rent_id', 'rentid');
    // }
}
