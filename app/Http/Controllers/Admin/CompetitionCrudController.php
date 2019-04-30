<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CompetitionRequest as StoreRequest;
use App\Http\Requests\CompetitionRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class CompetitionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class CompetitionCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Competition');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/competition');
        $this->crud->setEntityNameStrings('competition', 'competitions');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // Columns

        // Title Column
        $this->crud->addColumn(
            [
                'name' => 'title',
                'type' => 'text',
                'label' => 'Titre de la compétition'
            ]
        );

        // Date Column
        $this->crud->addColumn(
            [
                'name' => 'startDate',
                'type' => 'date',
                'label' => 'Début de la compétition'
            ]
        );

        // Place Column
        $this->crud->addColumn(
            [
                'name' => 'place',
                'type' => 'text',
                'label' => 'Lieu de la compétition'
            ]
        );

        // Fields

        // Title Field
        $this->crud->addField(
            [
                'name' => 'title',
                'type' => 'text',
                'label' => 'Titre de la compétition'
            ]
        );

        //Image Field
        $this->crud->addField([
            'name' => "image",
            'type' => 'image',
            'label' => "Photo de présentation",
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 0, // ommit or set to 0 to allow any aspect ratio
            // 'disk' => 's3_bucket', // in case you need to show images from a different disk
            // 'prefix' => 'uploads/images/profile_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);

        // Place Field
        $this->crud->addField(
            [
                'name' => 'place',
                'type' => 'text',
                'label' => 'Lieu de la compétition'
            ]
        );

        // Date Field
        $this->crud->addField(
            [   // date_picker
                'name' => 'startDate',
                'type' => 'date_picker',
                'label' => 'Date de début',
                // optional:
                'date_picker_options' => [
                    'todayBtn' => 'linked',
                    'format' => 'dd-mm-yyyy',
                    'language' => 'fr'
                ],
            ]
        );

        // Type Field
        $this->crud->addField(
            [
                'name' => 'type',
                'type' => 'select2_from_array',
                'options' => [
                    'Provincial Outdoor' => 'Provincial Outdoor',
                    'Provincial Indoor' => 'Provincial Indoor',
                    'Francophone Outdoor' => 'Francophone Outdoor',
                    'Francophone Indoor' => 'Francophone Indoor',
                    'National Outdoor' => 'National Outdoor',
                    'National Indoor' => 'National Indoor',
                    'International Outdoor' => 'International Outdoor',
                    'International Indoor' => 'International Indoor'
                ],
                'allows_null' => false,
                'default' => 'provincial-outdoor',
                'label' => 'Type de la compétition'
            ]
        );

        // isFinish Field
        $this->crud->addField(
            [
                'name' => 'isFinish',
                'type' => 'select_from_array',
                'options' => [
                    'not-finish' => 'Pas terminée',
                    'finish' => 'Terminée',
                ],
                'allows_null' => false,
                'default' => ' not-finish',
                'label' => 'Statut de la compétition'
            ]
        );

        // Content Field
        $this->crud->addField(
            [
                'name' => 'content',
                'type' => 'textarea',
                'label' => 'Courte description'
            ]
        );

        //Slug Field
        $this->crud->addField([
            'name' => 'slug',
            'label' => "Slug (URL)",
            'type' => 'text',
            'hint' => 'Est automatiquement généré à partir du date-titre si pas remplit.'
        ]);


        // add asterisk for fields that are required in CompetitionRequest
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
