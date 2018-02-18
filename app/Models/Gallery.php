<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "gallery";

    public function singles(){

    	return $this->hasMany('App\Models\Single_gallery', 'id_gallery', 'id_gallery');

    }

}
