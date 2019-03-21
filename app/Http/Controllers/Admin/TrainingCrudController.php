<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TrainingRequest as StoreRequest;
use App\Http\Requests\TrainingRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class TrainingCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TrainingCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Training');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/training');
        $this->crud->setEntityNameStrings('training', 'trainings');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
        // Location Column
        $this->crud->addColumn(
            [
                'name' => 'place_id',
                'type' => 'text',
                'label' => 'Lieu'
            ]
        );

        // Day Column
        $this->crud->addColumn(
            [
                'name' => 'day',
                'type' => 'text',
                'label' => 'Jour'
            ]
        );

        // StartHour Column
        $this->crud->addColumn(
            [
                'name' => 'startHour',
                'type' => 'time',
                'label' => 'Heure de début'
            ]
        );

        // StartEnd Column
        $this->crud->addColumn(
            [
                'name' => 'endHour',
                'type' => 'time',
                'label' => 'Heure de fin'
            ]
        );

        // Field
        // Day Field
        $this->crud->addField(
            [
                'name' => 'day',
                'type' => 'text',
                'label' => 'Jour de l\'entraînement'
            ]
        );

        // StartHour Field
        $this->crud->addField(
            [
                'name' => 'startHour',
                'type' => 'time',
                'label' => 'Début de l\'entraînement'
            ]
        );

        // StartEnd Field
        $this->crud->addField(
            [
                'name' => 'endHour',
                'type' => 'time',
                'label' => 'Fin de l\'entraînement'
            ]
        );

        // Day Column
        $this->crud->addField(
            [
                'name' => 'content',
                'type' => 'textarea',
                'label' => 'Courte description'
            ]
        );

        // Type field
        $this->crud->addField
        ([
            'label' => 'Sélectionnez le type d\'entraînement',
            'type' => 'select',
            'name' => 'type_id',
            'entity' => 'type',
            'attribute' => 'name',
            'model' => "App\Models\Type"
        ]);

        // Location field
        $this->crud->addField
        ([
            'label' => 'Sélectionnez le lieu d\'entraînement',
            'type' => 'select',
            'name' => 'place_id',
            'entity' => 'place',
            'attribute' => 'name',
            'model' => "App\Models\Place"
        ]);


        //Slug Field
        $this->crud->addField([
            'name' => 'slug',
            'label' => "Slug (URL)",
            'type' => 'text',
            'hint' => 'Est automatiquement généré à partir du nom-genre si pas remplit.'
        ]);

        // add asterisk for fields that are required in TrainingRequest
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
