<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        public function scences()
    {
        return $this->hasMany(Scene::class);
    }

}
