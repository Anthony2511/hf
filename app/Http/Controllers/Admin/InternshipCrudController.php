<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\InternshipRequest as StoreRequest;
use App\Http\Requests\InternshipRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class InternshipCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class InternshipCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Internship');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/internship');
        $this->crud->setEntityNameStrings('un stage', 'stages');

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
                'label' => 'Nom du stage'
            ]
        );

        // StartDay Column
        $this->crud->addColumn(
            [
                'name' => 'startDay',
                'type' => 'date',
                'label' => 'Date de début'
            ]
        );

        // EndDay Column
        $this->crud->addColumn(
            [
                'name' => 'endDay',
                'type' => 'date',
                'label' => 'Date de fin'
            ]
        );

        // EndDay Column
        $this->crud->addColumn(
            [
                'name' => 'endDay',
                'type' => 'date',
                'label' => 'Date de fin'
            ]
        );

        // Fields

        // Title Field
        $this->crud->addField(
            [
                'name' => 'title',
                'type' => 'text',
                'label' => 'Nom du stage',
                'tab' => 'Informations générales'
            ]
        );

        // StartHour Field
        $this->crud->addField(
            [
                'name' => 'startHour',
                'type' => 'time',
                'label' => 'Heure de début',
                'tab' => 'Informations générales'
            ]
        );

        // EndHour Field
        $this->crud->addField(
            [
                'name' => 'endHour',
                'type' => 'time',
                'label' => 'Heure de fin',
                'tab' => 'Informations générales'
            ]
        );

        // StartDay Field
        $this->crud->addField(
            [   // date_picker
                'name' => 'startDay',
                'type' => 'date_picker',
                'label' => 'Date de début',
                // optional:
                'date_picker_options' => [
                    'todayBtn' => 'linked',
                    'format' => 'dd-mm-yyyy',
                    'language' => 'fr'
                ],
                'tab' => 'Informations générales'
            ]
        );

        // EndDay Field
        $this->crud->addField(
            [   // date_picker
                'name' => 'endDay',
                'type' => 'date_picker',
                'label' => 'Date de fin',
                // optional:
                'date_picker_options' => [
                    'todayBtn' => 'linked',
                    'format' => 'dd-mm-yyyy',
                    'language' => 'fr'
                ],
                'tab' => 'Informations générales'
            ]
        );

        // Content Column
        $this->crud->addField(
            [
                'name' => 'content',
                'type' => 'textarea',
                'label' => 'Informations supplémentaires',
                'hint' => 'Par exemple : les tarifs, les transports,...',
                'tab' => 'Informations générales'
            ]
        );

        // isFinish Field
        $this->crud->addField(
            [
                'name' => 'isFinish',
                'type' => 'select_from_array',
                'options' => [
                    'not-finish' => 'Pas terminé',
                    'finish' => 'Terminé',
                ],
                'allows_null' => false,
                'default' => ' not-finish',
                'label' => 'Statut du stage',
                'tab' => 'Statut'
            ]
        );

        //Slug Field
        $this->crud->addField([
            'name' => 'slug',
            'label' => "Slug (URL)",
            'type' => 'text',
            'hint' => 'Est automatiquement généré à partir du nom-genre si pas remplit.',
            'tab' => 'Informations générales'
        ]);



        // add asterisk for fields that are required in InternshipRequest
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
