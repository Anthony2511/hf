<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AthleteTraining extends Model 
{

    protected $table = 'athlete_training';
    public $timestamps = true;
    protected $fillable = array('athlete_id', 'training_id');

}