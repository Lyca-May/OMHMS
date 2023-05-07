<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunctionalHall extends Model
{
    use HasFactory;

    protected $table = 'functional_hall';
    protected $fillable = [
        'userid',
        'functional_fname',
        'functional_mname',
        'functional_lname',
        'functional_gender',
        'functional_email',
        'functional_country',
        'functional_province',
        'functional_municipality',
        'functional_brgy',
        'functional_street',
        'functional_zipcode',
        'functional_intended_date',
        'functional_time',
        'functional_cancel_reason',
        'functional_contactno',
        'functional_no_of_participants',
        'functional_name_of_institution',
        'functional_event_name',
        'reference',
        'functional_status',
    ];


    public function user()
    {
        return $this->belongsTo(users::class);
    }
}

