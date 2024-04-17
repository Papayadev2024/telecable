<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','type','status'];

    public function articles(): \Illuminate\Database\Eloquent\Relations\MorphToMany
{
    return $this->morphedByMany(Blog::class, 'taggable');
}



}


