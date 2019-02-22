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
