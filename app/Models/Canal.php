<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canal extends Model
{
    use HasFactory;
    protected $fillable = ['name','imagen','description','color','slug','type','visible','status'];

    public function productos()
    {
        return $this->belongsToMany(Products::class, 'canal_xproducts', 'canal_id', 'producto_id');
    }
}
