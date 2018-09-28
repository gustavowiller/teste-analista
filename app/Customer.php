<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function path(){
        return '/customers/' . $this->id;
    }

    public function getNameAttribute(){
        return ($this->title . " " . $this->first_name .  " " . $this->last_name);
    }

    public function addresses(){
        return $this->hasMany(Address::class);
    }

    public function movies(){
        return $this->hasMany(Movie::class);
    }
}
