<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CommentRequest as StoreRequest;
use App\Http\Requests\CommentRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class CommentCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class CommentCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Comment');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/comment');
        $this->crud->setEntityNameStrings('un commentaire', 'commentaires');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->denyAccess('update');

        // ------ CRUD COLUMNS
        $this->crud->addColumn
        ([
            'name' => 'user_name',
            'label' => 'Nom/Pseudo',
        ]);
        $this->crud->addColumn
        ([
            'name' => 'email',
            'label' => 'Adresse e-mail',
        ]);
        $this->crud->addColumn
        ([
            'label' => "Sur l’article",
            'type' => "select",
            'name' => 'post_id',
            'entity' => 'article',
            'attribute' => "title",
            'model' => "App\Models\Comment"
        ]);
        $this->crud->addColumn
        ([
            'name' => 'content',
            'label' => 'Commentaire',
            'type' => 'text'
        ]);

        // add asterisk for fields that are required in CommentRequest
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
