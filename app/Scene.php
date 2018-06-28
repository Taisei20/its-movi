<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{

     protected $guarded = ['id'];

        public function cuts()
    {
        return $this->hasMany(Cut::class);
    }

        public function product()
    {
        return $this->belongsTo(Product::class);

}

}