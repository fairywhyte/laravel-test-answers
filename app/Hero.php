<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * Do the following 3 things:
* 1) create a model Hero
* 3) in the Hero model define a many-to-many relationship with the model Image (using the table hero_image)
 */
class Hero extends Model
{
    protected $table="heroes";

    //define a many-to-many relationship with the model Image (using the table hero_image)
    public function images()
	{
       //return $this->hasMany('App\Image', 'hero_image');
        return $this->belongsToMany('App\Image','hero_image');
    }
    public function emergencies(){
        return $this->belongsToMany('App\Emergency','hero_id');
    }
}
