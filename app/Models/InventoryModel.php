<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryModel extends Model
{
    use HasFactory;

    protected $table = 'inventory_artifacts';
    protected $primaryKey = 'artifact_id';
    protected $fillable = [
        'category_id',
        'userid',
        'artifact_name',
        'artifact_description',
        'quantity',
        'artifact_category',
        'artifact_image',
        'is_archived',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(users::class);
    }
    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'category_id', 'category_id');
    }

}
