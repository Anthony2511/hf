<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AthleteTrainer extends Model 
{

    protected $table = 'athlete_trainer';
    public $timestamps = true;
    protected $fillable = array('athlete_id', 'trainer_id');

}