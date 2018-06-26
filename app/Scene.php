<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
        public function cuts()
    {
        return $this->hasMany(Cut::class);
    }


}
