<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\AthleteRequest as StoreRequest;
use App\Http\Requests\AthleteRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class AthleteCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class AthleteCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Athlete');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/athlete');
        $this->crud->setEntityNameStrings('athlete', 'athletes');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // Columns
        $this->crud->addColumn(['name' => 'firstname', 'type' => 'text', 'label' => 'Prénom']);

        // Fields
        $this->crud->addField(['name' => 'firstname', 'type' => 'text', 'label' => 'Prénom']);

        // add asterisk for fields that are required in AthleteRequest
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
