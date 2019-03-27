<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TrophieRequest as StoreRequest;
use App\Http\Requests\TrophieRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class TrophieCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TrophieCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Trophie');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/trophie');
        $this->crud->setEntityNameStrings('trophie', 'trophies');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        //Columns

        // Year Column
        $this->crud->addColumn(
            [
                'name' => 'year',
                'type' => 'integer',
                'label' => 'Année'
            ]
        );

        // Name Column
        $this->crud->addColumn(
            [
                'name' => 'name',
                'type' => 'text',
                'label' => 'Titre du trophée'
            ]
        );

        // Fields

        // Year Field
        $this->crud->addField(
            [
                'name' => 'year',
                'type' => 'number',
                'label' => 'Année du trophée'
            ]
        );

        // Name Field
        $this->crud->addField(
            [
                'name' => 'name',
                'type' => 'text',
                'label' => 'Titre du trophée'
            ]
        );

        // add asterisk for fields that are required in TrophieRequest
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
