<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $uploads = '/images/admin/';

    protected $fillable = [
        'path'
    ];

    //make accessor - attribute shold be name of column photo table
    public function getPathAttribute($photo){
        return $this->uploads . $photo;
    }
}
