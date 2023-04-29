<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit_Model extends Model
{
    use HasFactory;

    protected $fillable =[
        'visits_fname',
        'visits_mname',
        'visits_lname',
        'visits_country',
        'visits_province',
        'visits_municipality',
        'visits_brgy',
        'visits_street',
        'visits_zipcode',,
        'visits_intended_date',
        'visits_time',
        'visits_birthdate',
        'visits_contactno',
        'visits_no_of_visitors',
        'visits_name_of_institution',
        'visits_status',
    ];
}
