<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History_Content extends Model
{
    use HasFactory;
    protected $table = 'history_content';

    protected $primaryKey = 'history_id';

    protected $fillable = [
        'userid',
        'history_title',
        'history_desc',
        'history_info',
        'history_image',
        'is_archived',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(users::class);
    }
}
