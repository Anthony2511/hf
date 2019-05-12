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
        $this->crud->setEntityNameStrings('un entraîneur', 'entraîneurs');

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
                'label' => 'Prénom',
                'tab' => 'Informations générales'
            ]
        );

        // Lastname Field
        $this->crud->addField(
            [
                'name' => 'lastname',
                'type' => 'text',
                'label' => 'Nom',
                'tab' => 'Informations générales'
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
            'tab' => 'Informations générales'
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
            'tab' => 'Informations générales'
        ]);

        // Status Field
        $this->crud->addField(
            [
                'name' => 'status',
                'type' => 'select_from_array',
                'options' => [
                    'entraîneur' => 'Entraîneur',
                    'retraité' => 'Retraité'
                ],
                'allows_null' => false,
                'default' => 'entraîneur',
                'label' => 'Statut de l\'entraîneur',
                'tab' => 'Informations générales'
            ]
        );

        // Discipline field
        $this->crud->addField
        ([
            'label' => 'Sélectionnez les disciplines entraînées',
            'type' => 'select2_multiple',
            'name' => 'disciplines',
            'entity' => 'disciplines',
            'attribute' => 'specificdiscipline',
            'model' => "App\Models\Discipline",
            'pivot' => true,
            'tab' => 'Informations générales'
        ]);

        // Trophie field
        $this->crud->addField
        ([
            'label' => 'Sélectionnez ses trophées',
            'type' => 'select2_multiple',
            'name' => 'trophies',
            'entity' => 'trophies',
            'attribute' => 'fullname',
            'model' => "App\Models\Trophie",
            'pivot' => true,
            'hint' => 'Plusieurs entraîneurs peuvent avoir le même trophée si c\'est un trophée collectif',
            'tab' => 'Trophées'
        ]);

        // Division field
        $this->crud->addField
        ([
            'label' => 'Sélectionnez les divisions entraînées',
            'type' => 'select2_multiple',
            'name' => 'divisions',
            'entity' => 'divisions',
            'attribute' => 'specificdivision',
            'model' => "App\Models\Division",
            'pivot' => true,
            'tab' => 'Informations générales'
        ]);

        // Records Field
        $this->crud->addField
        ([
            'name' => 'records',
            'label' => 'Records',
            'type' => 'table',
            'entity_singular' => 'un record', // used on the "Add X" button
            'columns' => [
                'discipline' => 'Discipline',
                'record' => 'Record',
                'lieu' => 'Lieu',
                'date' => 'Date'
            ],
            'tab' => 'Records'
        ]);

        //Slug Field
        $this->crud->addField([
            'name' => 'slug',
            'label' => "Slug (URL)",
            'type' => 'text',
            'hint' => 'Est automatiquement généré à partir du nom-prénom si pas remplit.',
            'tab' => 'Informations générales'
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
