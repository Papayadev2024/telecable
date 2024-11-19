<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductosView extends Model
{
    use HasFactory;
    protected $fillable = [
        'title1section', 
        'subtitle1section', 

        'title2section',
        'description2section',
        'url_image2section',

        'title3section',
        'description3section'

    ];
}
