<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoView extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'subtitle1section', 
        'title1section', 
        'url_image1section', 
       
        'title2section',
        'description2section',

    ];
}
