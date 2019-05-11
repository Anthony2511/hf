<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Carbon\Carbon;

class Athlete extends Model
{
    use CrudTrait;
    use Sluggable, SluggableScopeHelpers;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'athletes';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = array(
        'firstname',
        'lastname',
        'image',
        'date_of_birth',
        'status',
        'slug',
        'division_id',
        'active',
        'profession',
        'records',
        'evolution'
    );
    // protected $hidden = [];
    // protected $dates = [];

    protected $casts = array(
        'array' => 'records',
        'array' => 'evolution'
    );

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug_or_title',
            ],
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function getImageProfile($suffix)
    {
        $basePath = 'uploads/athletes/';
        $fullname = pathinfo($this->image, PATHINFO_FILENAME);
        $imageProfile = $basePath . $fullname . $suffix;

        if (file_exists($imageProfile)) {
            return URL('/') . '/' . $imageProfile;
        } else {
            return $this->image;
        }
    }

    function getFormatDate()
    {
        $date = $this->date_of_birth;
        $dt = Carbon::create($date);

        echo $dt->setTimezone('Europe/Paris')->format('d/m/Y');
    }


    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function trainers()
    {
        return $this->belongsToMany('App\Models\Trainer');
    }

    public function disciplines()
    {
        return $this->belongsToMany('App\Models\Discipline');
    }

    public function division()
    {
        return $this->belongsTo('App\Models\Division');
    }

    public function trophies()
    {
        return $this->belongsToMany('App\Models\Trophie');
    }

    public function trainings()
    {
        return $this->belongsToMany('App\Models\Training');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    // The slug is created automatically from the "title" field if no slug exists.
    public function getSlugOrTitleAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }

        $lastname = $this->lastname;
        $firstname = $this->firstname;

        return $firstname . '-' . $lastname;
    }

    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getLastNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getStatusAttribute($value)
    {
        return ucfirst($value);
    }

    public function getProfessionAttribute($value)
    {
        return ucfirst($value);
    }

    public function getFullNameAttribute()
    {
        return ucfirst($this->firstname) . ' ' . ucfirst($this->lastname);
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public_folder";
        $destination_path = "/athletes";

        // if the image was erased
        if ($value == null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image')) {
            // 0. Make the image
            $imageProfile = \Image::make($value)->fit(335, 457);
            $imagePreview = \Image::make($value)->fit(30, 30);

            // 1. Generate a filename.
            $filename = md5($value . time());

            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path . '/' . $filename . '_profile.jpg', $imageProfile->stream());
            \Storage::disk($disk)->put($destination_path . '/' . $filename . '_preview.jpg', $imagePreview->stream());

            // 3. Save the path to the database
            $this->attributes[$attribute_name] = Url('/') . '/' . $destination_path . '/' . $filename . '.jpg';
        }
    }
}
