<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  use HasFactory;
  protected $fillable = [
    'producto',
    'precio',
    'descuento',
    'stock',
    'imagen',
    'destacar',
    'recomendar',
    'atributes',
    'visible',
    'status',
    'extract',
    'description',
    'costo_x_art',
    'peso',
    'categoria_id',
    'collection_id'
  ];


  public function categoria()
  {
      return $this->belongsTo(Category::class);
  }

  public function collection()
  {
      return $this->belongsTo(Collection::class);
  }

  public function galeria(){
    return $this->hasMany(Galerie::class, 'product_id');
  }

  public function tags()
  {
      return $this->belongsToMany(Tag::class, 'tags_xproducts', 'producto_id', 'tag_id');
  }
  
  public function scopeActiveDestacado($query)
  {
      return $query->where('status', true)->where('destacar', true);
  }

  public function attributes()
    {
        return $this->belongsToMany(Attributes::class, 'product_has_attribute', 'product_id', 'attribute_id')
                    ->withPivot('attribute_value_id');
    }

  // public function atributos() 
  //   {
  //       return $this->belongsToMany(Attributes::class, 'product_has_attribute', 'product_id',);
  //   } 
   
  
}
