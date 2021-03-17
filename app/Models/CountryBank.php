<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryBank extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'bank_name',
        'currency',
        'is_transfer_fee_apply',
        'transfer_fee',
    ];

    public $hidden = [
        'created_at',
        'updated_at'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
