<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'sub_title',
        'main_category',
        'adult_confirmation',
    ];

    public $hidden = [
        'created_at',
        'updated_at',
    ];

    public function categories()
    {
        return $this->belongsTo(MainCategory::class, 'main_category', 'id');
    }
}
