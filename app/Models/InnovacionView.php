<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InnovacionView extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'title1section', 
        'subtitle1section', 
        'url_image1section',

        'title2section',
        'description2section',
        'title3section',
        'description3section',
        'url_image3section',

        'title4section',
        'description4section'
    ];

}
