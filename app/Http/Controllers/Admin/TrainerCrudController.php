<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TrainerRequest as StoreRequest;
use App\Http\Requests\TrainerRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class TrainerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TrainerCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Trainer');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/trainer');
        $this->crud->setEntityNameStrings('trainer', 'trainers');

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
                'label' => 'Prénom'
            ]
        );

        // Lastname Column
        $this->crud->addColumn(
            [
                'name' => 'lastname',
                'type' => 'text',
                'label' => 'Nom'
            ]
        );

        // Fields

        // Firstname Field
        $this->crud->addField(
            [
                'name' => 'firstname',
                'type' => 'text',
                'label' => 'Prénom'
            ]
        );

        // Lastname Field
        $this->crud->addField(
            [
                'name' => 'lastname',
                'type' => 'text',
                'label' => 'Nom'
            ]
        );

        //Image Field
        $this->crud->addField([
            'name' => "image",
            'type' => 'image',
            'label' => "Photo de profil",
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 0, // ommit or set to 0 to allow any aspect ratio
            // 'disk' => 's3_bucket', // in case you need to show images from a different disk
            // 'prefix' => 'uploads/images/profile_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);

        // Date of birth Field
        $this->crud->addField([
            'name' => 'date_of_birth',
            'label' => "Date de naissance",
            'type' => 'date_picker',
            // optional:
            'date_picker_options' => [
                'todayBtn' => true,
                'format' => 'dd-mm-yyyy',
                'language' => 'fr'
            ],
        ]);

        // Status Field
        $this->crud->addField(
            [
                'name' => 'status',
                'type' => 'text',
                'label' => 'Statut'
            ]
        );

        //Slug Field
        $this->crud->addField([
            'name' => 'slug',
            'label' => "Slug (URL)",
            'type' => 'text',
            'hint' => 'Est automatiquement généré à partir du nom-prénom si pas remplit.'
        ]);




        // add asterisk for fields that are required in TrainerRequest
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
