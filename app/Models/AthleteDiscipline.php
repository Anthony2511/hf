<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AthleteDiscipline extends Model 
{

    protected $table = 'athlete_discipline';
    public $timestamps = true;
    protected $fillable = array('athlete_id', 'discipline_id');

}