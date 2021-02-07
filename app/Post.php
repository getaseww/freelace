<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [

        'title', 'description','bid','user_id'

    ];

    public function users(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function applly(){
       
        return $this->belongsTo('App\Apply', 'post_id');
    }
    
    
}
