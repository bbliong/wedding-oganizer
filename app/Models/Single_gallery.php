<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Single_Gallery extends Model
{
    protected $table = "photo_gallery";

    public function gallery(){

    	return $this->belongsTo('App\Models\Gallery');

    }
}
