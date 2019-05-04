<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\AuthorRequest as StoreRequest;
use App\Http\Requests\AuthorRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class AuthorCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class AuthorCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Author');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/author');
        $this->crud->setEntityNameStrings('un auteur', 'auteurs');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // Columns

        // Firstname Column
        $this->crud->addColumn(
            [
                'name' => 'firstname',
                'type' => 'text',
                'label' => 'Prénom de \'auteur'
            ]
        );

        // Lastname Column
        $this->crud->addColumn(
            [
                'name' => 'lastname',
                'type' => 'text',
                'label' => 'Nom de l\'auteur',
            ]
        );

        // Fields

        // Firstname Field
        $this->crud->addField(
            [
                'name' => 'firstname',
                'type' => 'text',
                'label' => 'Prénom de l\'auteur'
            ]
        );

        // Lastname Field
        $this->crud->addField(
            [
                'name' => 'lastname',
                'type' => 'text',
                'label' => 'Nom de l\'auteur'
            ]
        );

        //Image Field
        $this->crud->addField([
            'name' => 'picture',
            'type' => 'image',
            'label' => "Photo de présentation",
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 0, // ommit or set to 0 to allow any aspect ratio
            // 'disk' => 's3_bucket', // in case you need to show images from a different disk
            // 'prefix' => 'uploads/images/profile_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);

        // Email Field
        $this->crud->addField(
            [
                'name' => 'email',
                'type' => 'email',
                'label' => 'Email de l\'auteur'
            ]
        );

        // add asterisk for fields that are required in AuthorRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
