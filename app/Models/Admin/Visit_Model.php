<?php

namespace App\Models\Admin;

use App\Http\Controllers\Authentication\AuthController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit_Model extends Model
{
    use HasFactory;

    protected $fillable = [
        'userid',
        'visits_fname',
        'visits_mname',
        'visits_lname',
        'visits_country',
        'visits_province',
        'visits_municipality',
        'visits_brgy',
        'visits_street',
        'visits_zipcode',
        'visits_intended_date',
        'visits_time',
        'visits_birthdate',
        'visits_contactno',
        'visits_no_of_visitors',
        'visits_name_of_institution',
        'visits_status',
    ];


    public function user()
    {
        return $this->belongsTo(users::class);
    }
    protected $table = 'visits';
        use HasFactory;
}
