<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'sub_title',
        'adult_confirmation'
    ];

    public $hidden = [
        'created_at',
        'updated_at'
    ];
}
