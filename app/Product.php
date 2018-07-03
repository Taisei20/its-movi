<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

     protected $fillable = ['title', 'user_id'];

        public function scences()
    {
        return $this->hasMany(Scene::class);
    }

        public function user()
    {
        return $this->belongsTo(User::class);
    }


}
