<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Profile extends Model
{
    protected $fillable =[
        'profession','skills','experience','about','user_id',
    ];

    public function users(){
          return $this->belongsTo(User::class);
    }
}
