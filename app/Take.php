<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Take extends Model
{

     protected $guarded = ['id'];

        public function cut()
    {
        return $this->belongsTo(Cut::class);
    }


}
