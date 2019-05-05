<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Amenitie extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'amenities';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = array(
        'image',
        'price',
        'title',
        'sexe'
    );
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function getImageEquipment($suffix)
    {
        $basePath = 'uploads/equipments/';
        $fullname = pathinfo($this->image, PATHINFO_FILENAME);
        $imageProfile = $basePath . $fullname . $suffix;

        if (file_exists($imageProfile)) {
            return URL('/') . '/' . $imageProfile;
        } else {
            return $this->image;
        }
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

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public_folder";
        $destination_path = "/equipments";

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
            $imageOriginal = \Image::make($value);
            $imageProfile = \Image::make($value)->fit(335, 457);

            // 1. Generate a filename.
            $filename = md5($value . time());

            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path . '/' . $filename . '_original.jpg', $imageOriginal->stream());
            \Storage::disk($disk)->put($destination_path . '/' . $filename . '_profile.jpg', $imageProfile->stream());

            // 3. Save the path to the database
            $this->attributes[$attribute_name] = Url('/') . '/' . $destination_path . '/' . $filename . '.jpg';
        }
    }
}
