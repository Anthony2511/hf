<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\AmenitieRequest as StoreRequest;
use App\Http\Requests\AmenitieRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class AmenitieCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class AmenitieCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Amenitie');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/amenitie');
        $this->crud->setEntityNameStrings('un équipement', 'équipements');

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
                'label' => 'Nom de l\'équipement'
            ]
        );

        // Price Column
        $this->crud->addColumn(
            [
                'name' => 'price',
                'type' => 'text',
                'label' => 'Prix de l\'équipement',
            ]
        );

        // Fields

        // Title Field
        $this->crud->addField(
            [
                'name' => 'title',
                'type' => 'text',
                'label' => 'Nom de l\'équipement'
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

        // Size field
        $this->crud->addField
        ([
            'label' => 'Sélectionnez les tailles',
            'type' => 'select2_multiple',
            'name' => 'sizes',
            'entity' => 'sizes',
            'attribute' => 'name',
            'model' => "App\Models\Size",
            'pivot' => true
        ]);

        //  Sexe Field
        $this->crud->addField(
            [
                'name' => 'sexe',
                'type' => 'select2_from_array',
                'options' => [
                    'femmes' => 'Femmes',
                    'hommes' => 'Hommes',
                    'mixte' => 'Mixte'
                ],
                'allows_null' => false,
                'default' => 'femmes',
                'label' => 'Catégorie de l\'équipement'
            ]
        );

        // Price Field
        $this->crud->addField(
            [
                'name' => 'price',
                'type' => 'text',
                'label' => 'Prix de l\'équipement',
                'hint' => 'Par exemple : 33€'
            ]
        );

        // add asterisk for fields that are required in AmenitieRequest
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
