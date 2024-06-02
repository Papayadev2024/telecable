<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Microcategory extends Model
{
    use HasFactory;

    public function subcategories()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }
}
