<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ArticleRequest as StoreRequest;
use App\Http\Requests\ArticleRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class ArticleCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ArticleCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Article');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/article');
        $this->crud->setEntityNameStrings('un article', 'articles');

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
                'label' => 'Titre de l\'article'
            ]
        );

        // Date Column
        $this->crud->addColumn(
            [
                'name' => 'date',
                'type' => 'date',
                'label' => 'Date de publication',
            ]
        );

        // Fields

        // Title Field
        $this->crud->addField(
            [
                'name' => 'title',
                'type' => 'text',
                'label' => 'Titre de l\'article'
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

        // Author Field
        $this->crud->addField
        ([
            'name' => 'author_id',
            'label' => 'Nom de l\'auteur',
            'type' => 'select2',
            'entity' => 'author',
            'attribute' => 'fullname',
            'model' => 'App\Models\Author',
            'hint' => 'Si votre nom n\'apparait pas, ajoutez-le dans les auteurs'
        ]);

        $this->crud->addField([
            'name'  => 'date',
            'label' => 'Date de publication',
            'type'  => 'date',
            'value' => date('Y-m-d')
        ], 'create');

        $this->crud->addField([
            'name'  => 'date',
            'label' => 'Date de publication',
            'type'  => 'date',
        ], 'update');

        // Introduction Field
        $this->crud->addField(
            [
                'name' => 'introduction',
                'type' => 'simplemde',
                'label' => 'Introduction de l\'article',
                'hint' => 'Maximum 175 caractères'
            ]
        );

        // Content Field
        $this->crud->addField(
            [
                'name' => 'content',
                'type' => 'simplemde',
                'label' => 'Contenu de l\'article'
            ]
        );

        //Slug Field
        $this->crud->addField([
            'name' => 'slug',
            'label' => "Slug (URL)",
            'type' => 'text',
            'hint' => 'Est automatiquement généré à partir du titre si pas remplit.'
        ]);

        // add asterisk for fields that are required in ArticleRequest
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
