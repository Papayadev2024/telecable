<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
{
    use HasFactory;
    protected $filiable =  ['titulo',
    'imagen',
    'descripcion',
    'valores',
    'color',
    'status'];

    public function values()
    {
        return $this->hasMany(AttributesValues::class, 'attribute_id');
    }

    public function typeAttribute()
    {
        return $this->belongsTo(TypeAttribute::class, 'type_atributte_id');
    }

    public function products()
    {
        return $this->belongsToMany(Products::class, 'product_has_attribute', 'attribute_id', 'product_id')
                    ->withPivot('attribute_value_id');
    }

    
}
