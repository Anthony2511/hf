<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Carbon\Carbon;
use Request;
use Cookie;

class Article extends Model
{
    use CrudTrait;
    use Sluggable, SluggableScopeHelpers;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'articles';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = array(
        'title',
        'slug',
        'introduction',
        'content',
        'image',
        'author_id',
        'date'
    );
    // protected $hidden = [];
    // protected $dates = [];
    protected $casts = array(
        'date' => 'date'
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
        $basePath = 'uploads/articles/';
        $fullname = pathinfo($this->image, PATHINFO_FILENAME);
        $imageProfile = $basePath . $fullname . $suffix;

        if (file_exists($imageProfile)) {
            return URL('/') . '/' . $imageProfile;
        } else {
            return $this->image;
        }
    }

    public function getFullDate()
    {
        setlocale(LC_TIME, 'fr_FR.utf-8');
        return Carbon::parse($this->date)->formatLocalized('%d/%m/%Y');
    }

    public function setValueCommentForm($data)
    {
        if (Request::old($data) && Cookie::get($data) == null)
        {
            echo Request::old($data);
        } elseif (Cookie::get($data) !== null){
            echo Request::cookie($data);
        }
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function author()
    {
        return $this->belongsTo('App\Models\Author');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'post_id');
    }



    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    public function scopePublished($query)
    {
        return $query->where('date', '<=', date('Y-m-d'))
            ->orderBy('date', 'DESC');
    }

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

        return $title;
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
        $destination_path = "/articles";

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
            $imageProfile = \Image::make($value)->fit(589, 272);

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
