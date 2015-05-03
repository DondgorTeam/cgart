<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

//    protected $table = 'images';

    protected $fillable = ['imageName', 'thumbnailName', 'title'];

}
