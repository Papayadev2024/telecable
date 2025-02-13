<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NosotrosView extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'subtitle1section',
        'title1section', 
        'title1section2', 
        'description1section', 

        'title2section',
        'subtitle2section',
        'url_image2section',
        
        'title3section',
        'subtitle3section',
        'url_image3section',

        'subtitle4section',
        'title4section', 
        'title4section2', 
        'description4section', 

    ];
}
