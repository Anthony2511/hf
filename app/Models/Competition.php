<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Carbon\Carbon;

class Competition extends Model
{
    use CrudTrait;
    use Sluggable, SluggableScopeHelpers;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'competitions';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = array(
        'title',
        'place',
        'content',
        'isFinish',
        'slug',
        'type',
        'image',
        'horaires_h',
        'horaires_f',
        'startDate',
        'results'
    );
    // protected $hidden = [];
    protected $dates = [
        'startDate'
    ];

    protected $casts = array(
        'array' => 'horaires_h',
        'array' => 'horaires_f',
        'date' => 'startDate'
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
        $basePath = 'uploads/competitions/';
        $fullname = pathinfo($this->image, PATHINFO_FILENAME);
        $imageProfile = $basePath . $fullname . $suffix;

        if (file_exists($imageProfile)) {
            return URL('/') . '/' . $imageProfile;
        } else {
            return $this->image;
        }
    }

    public function getFileResult($suffix)
    {
        $basePath = 'uploads/resultats/';
        $fullname = pathinfo($this->results, PATHINFO_FILENAME);
        $fileResult = $basePath . $fullname . $suffix;

        if (file_exists($fileResult)) {
            return URL('/') . '/' . $fileResult;
        } else {
            return $this->results;
        }
    }

    public function getFullMonth()
    {
        setlocale(LC_TIME, 'fr_FR.utf-8');
        return Carbon::parse($this->startDate)->formatLocalized('%B');
    }

    public function getFullDate()
    {
        setlocale(LC_TIME, 'fr_FR.utf-8');
        return Carbon::parse($this->startDate)->formatLocalized('%d %B %Y');
    }

    function getFormatStartDate()
    {
        setlocale(LC_TIME, 'fr_FR.utf-8');
        return Carbon::parse($this->startDate)->format('d/m/Y');
    }


    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

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

        $title = $this->title;
        $startDate = $this->startDate;

        return $startDate . '-' . $title;
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
        $destination_path = "/competitions";

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
            $imageProfile = \Image::make($value)->fit(614, 408);

            // 1. Generate a filename.
            $filename = md5($value . time());

            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path . '/' . $filename . '_profile.jpg', $imageProfile->stream());

            // 3. Save the path to the database
            $this->attributes[$attribute_name] = Url('/') . '/' . $destination_path . '/' . $filename . '.jpg';
        }
    }

    public function setResultsAttribute($value)
    {
        $attribute_name = "results";
        $disk = "uploads";
        $destination_path = "/resultats";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }
}
