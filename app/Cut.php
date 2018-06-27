<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cut extends Model
{

     protected $guarded = ['id'];

        public function takes()
    {
        return $this->hasMany(Take::class);
    }

        public function scenes()
    {
        return $this->belongsTo(Scene::class);
    }


}
