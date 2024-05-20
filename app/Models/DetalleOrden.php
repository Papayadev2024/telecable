<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleOrden extends Model
{
    use HasFactory;
    protected $fillable = [
        'producto_id',
        'cantidad',
        'orden_id',
        'precio'
    ];

    public function ordenes()
    {
        return $this->belongsTo(Ordenes::class, 'orden_id');
    }
}
