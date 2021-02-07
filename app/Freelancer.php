<?php

namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Freelancer extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'freelancer';

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        public function posts(){
            return $this->hasMany(Post::class);
        }
 }