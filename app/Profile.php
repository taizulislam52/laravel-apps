<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded =[];
    public function profileImage()
    {
        return $this->image ? '/storage/'.$this->image: '/storage/profile/7eQoORFVlJubyLDK4p9yAqy92yczkfHPK5dGNtWw.png';
    }
    public function User()
    {
      return  $this->belongsTo(\App\User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(\App\User::class);
    }

}
