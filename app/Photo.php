<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    // /codehacking/public

    protected $uploads = '/images/';

    protected $fillable = ['file'];


    public function getFileAttribute($photo){

        return $this->uploads . $photo;

    }

}
