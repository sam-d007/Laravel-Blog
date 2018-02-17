<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   //if you want to change the name of the variables
    //table name
    protected $table = 'posts';
    //primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
