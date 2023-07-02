<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer_Model extends Model
{
    use HasFactory;

    protected $table = 'history_footer';

    protected $primaryKey = 'footer_id';

    protected $fillable = [
        'userid',
        'footer_title',
        'footer_info',
        'footer_image1',
        'footer_image2',
        'footer_image3',
        'footer_trademark',
        'is_archived',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(users::class);
    }
}
