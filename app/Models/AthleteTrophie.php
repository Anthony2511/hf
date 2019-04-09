<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AthleteTrophie extends Model
{

    protected $table = 'athlete_trophie';
    public $timestamps = true;
    protected $fillable = array('athlete_id', 'trophie_id');

}