<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnouncementModel extends Model
{
    use HasFactory;

    protected $table = 'announcement';
    protected $fillable = [
        'userid',
        'announcer',
        'announcer_avatar',
        'announcement_content',
        'announcement_status',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(users::class);
    }
}
