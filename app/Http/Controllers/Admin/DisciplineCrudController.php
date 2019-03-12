<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\DisciplineRequest as StoreRequest;
use App\Http\Requests\DisciplineRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class DisciplineCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class DisciplineCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Discipline');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/discipline');
        $this->crud->setEntityNameStrings('discipline', 'disciplines');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // Columns

        // Name Column
        $this->crud->addColumn(
            [
                'name' => 'name',
                'type' => 'text',
                'label' => 'Nom de la discipline'
            ]
        );

        // Gender Column
        $this->crud->addColumn(
            [
                'name' => 'gender',
                'type' => 'text',
                'label' => 'Genre'
            ]
        );

        // Type Column
        $this->crud->addColumn(
            [
                'name' => 'type',
                'type' => 'text',
                'label' => 'Type'
            ]
        );

        // Fields

        // Name Field
        $this->crud->addField(
            [
                'name' => 'name',
                'type' => 'text',
                'label' => 'Nom de la discipline'
            ]
        );

        // Gender Field
        $this->crud->addField(
            [
                'name' => 'gender',
                'type' => 'select_from_array',
                'options' => ['hommes' => 'Hommes', 'femmes' => 'Femmes'],
                'allows_null' => false,
                'default' => 'hommes',
                'label' => 'Genre de la discipline'
            ]
        );

        // Type Field
        $this->crud->addField(
            [
                'name' => 'type',
                'type' => 'select_from_array',
                'options' => [
                    'courses' => 'Courses',
                    'sauts' => 'Sauts',
                    'lancers' => 'Lancers',
                    'épreuves combinées' => 'Épreuves combinées',
                    'marche' => 'Marche'],
                'allows_null' => false,
                'default' => 'courses',
                'label' => 'Type de la discipline'
            ]
        );

        //Slug Field
        $this->crud->addField([
            'name' => 'slug',
            'label' => "Slug (URL)",
            'type' => 'text',
            'hint' => 'Est automatiquement généré à partir du nom-genre si pas remplit.'
        ]);

        // add asterisk for fields that are required in DisciplineRequest
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
