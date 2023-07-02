<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WTS_Model extends Model
{
    use HasFactory;

    protected $table = 'what_to_see';

    protected $primaryKey = 'wts_id';

    protected $fillable = [
        'userid',
        'wts_title',
        'wts_info',
        'wts_image_title',
        'wts_image',
        'is_archived',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(users::class);
    }
}
