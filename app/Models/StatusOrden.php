<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusOrden extends Model
{
    use HasFactory;
    protected $fillable = [
    'descripcion',
    'status',
    ];
    

}
