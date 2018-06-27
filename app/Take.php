<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Take extends Model
{
    protected $fillable = [
        'cut_id', 'take_number', 'judge', 'memo'
    ];
}
