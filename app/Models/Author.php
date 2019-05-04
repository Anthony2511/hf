<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Author extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'authors';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = array(
        'firstname',
        'lastname',
        'email',
        'picture'
    );
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function getImageProfile($suffix)
    {
        $basePath = 'uploads/authors/';
        $fullname = pathinfo($this->picture, PATHINFO_FILENAME);
        $imageProfile = $basePath . $fullname . $suffix;

        if (file_exists($imageProfile)) {
            return URL('/') . '/' . $imageProfile;
        } else {
            return $this->picture;
        }
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function articles()
    {
        return $this->hasMany('App\Models\Article');
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
    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getLastNameAttribute($value)
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

    public function setPictureAttribute($value)
    {
        $attribute_name = "picture";
        $disk = "public_folder";
        $destination_path = "/authors";

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
            $image = \Image::make($value);
            $imageProfile = \Image::make($value)->fit(30, 30);

            // 1. Generate a filename.
            $filename = md5($value . time());

            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path . '/' . $filename . '_fullscreen.jpg', $image->stream());
            \Storage::disk($disk)->put($destination_path . '/' . $filename . '_profile.jpg', $imageProfile->stream());

            // 3. Save the path to the database
            $this->attributes[$attribute_name] = Url('/') . '/' . $destination_path . '/' . $filename . '.jpg';
        }
    }
}
