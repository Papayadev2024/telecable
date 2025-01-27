<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeView extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'title1section', 
        'description1section', 
        'url_image1section',

        'title2section',
        'description2section',
        'description2section2',

        'title3section',
        'description3section',
        'description3section2',
        'description3section3',
        'url_image3section',

        'title4section',
        'description4section',
        'description4section2',

        'titlebenefit1',
        'descriptionbenefit1',
        'titlebenefit2',
        'descriptionbenefit2',
        'titlebenefit3',
        'descriptionbenefit3',

        'url_image4section',

        // 'title5section',
        // 'description5section',
        // 'url_image5section',

        // 'title6section',
        // 'description6section',
        // 'url_image6section',
        
        // 'title7section',
        // 'description7section',
        // 'url_image7section',

        // 'title8section',
        // 'one_description8section',
        // 'two_description8section',
        // 'url_image8section',


        // 'subtitle9section',
        // 'title9section',
        // 'one_description9section',
        // 'two_description9section',

       
    ];
}
