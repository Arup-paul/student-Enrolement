<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
     use SoftDeletes;
    // protected $fillable = [
    //   'title',
    //   'body'

    // ];


     protected $dates = ['deleted_at'];


     public function user(){
     	return $this->belongsTo('App\User');
     }

     public function photos(){

        return $this->morphMany('App\Photo','imageable');
     }

     public function tags(){
        return $this->morPhToMany('App\Tag','tagable');
     }
  
}
