<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    use HasFactory;
    protected $table = 'member';

    protected $primaryKey = 'member_id';

    protected $fillable = [
            'userid',
            'visit_id' ,
            'first_name',
            'middle_name' ,
            'last_name',
            'gender',
            'age',
            'province' ,
            'municipality',
            'barangay',
            'sitio',
     ];

     public function user()
     {
         return $this->belongsTo(users::class, 'userid', 'user_id');
     }
     public function visits()
     {
         return $this->belongsTo(users::class, 'visit_id', 'visits_id');
     }

}
