<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainerDivision extends Model 
{

    protected $table = 'trainer_division';
    public $timestamps = true;
    protected $fillable = array('division_id');

}