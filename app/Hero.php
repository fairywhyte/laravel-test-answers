<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table="heroes";

    //define a many-to-many relationship with the model Image (using the table hero_image)
    public function images()
	{
       //return $this->hasMany('App\Image', 'hero_image');
        return $this->belongsToMany('App\Image','hero_image');
	}
}
