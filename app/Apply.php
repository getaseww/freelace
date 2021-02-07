<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{

    protected $fillable = [

        'bid', 'duration','portfolio','user_id','post_id',

    ];

    public function users(){
        return $this->belongsTo('App\User', 'user_id');
    }
    public function posts(){
       
        return $this->hasMany('App\Post', 'post_id');
}


}
