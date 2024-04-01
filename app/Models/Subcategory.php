<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable=['name', 'description' ,'state'];


    public function category()
    {
        return $this->hasMany(Category::class, 'subcategory_id');
    }
}
