<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'area',
        'nombre',
        'celular',
        'email',
        'visible',
        'status',
    ];

    public function categoria()
    {
        return $this->belongsTo(Category::class);
    }
}
