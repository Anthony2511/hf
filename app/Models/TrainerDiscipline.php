<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainerDiscipline extends Model 
{

    protected $table = 'trainer_discipline';
    public $timestamps = true;
    protected $fillable = array('trainer_id', 'discipline_id');

}