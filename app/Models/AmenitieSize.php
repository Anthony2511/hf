<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AmenitieSize extends Model
{

    protected $table = 'amenitie_size';
    public $timestamps = true;
    protected $fillable = array('amenitie_id', 'size_id');

}