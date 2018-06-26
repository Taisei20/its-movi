<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cut extends Model
{
        public function takes()
    {
        return $this->hasMany(Take::class);
    }

}
