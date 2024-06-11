<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'landing_id',
        'name',
        'value',
        'parent',
        'data_type',
    ];
}
