<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $fillable = [
        'userid',
        'path',
    ];


    public function user()
    {
        return $this->belongsTo(users::class);
    }
}
