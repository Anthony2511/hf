<?php

namespace App;

trait PageTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Page Templates for Backpack\PageManager
    |--------------------------------------------------------------------------
    |
    | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard page fields:
    | - select template
    | - page name (only seen by admins)
    | - page title
    | - page slug
    */

    private function athletes_index()
    {
        $this->crud->addField(
            [
                'name' => 'content_text',
                'type' => 'wysiwyg',
                'label' => 'Texte d\'introduction',
                'tab' => 'Section d\'introduction'
            ]
        );
    }

    private function trainers_index()
    {
        $this->crud->addField(
            [
                'name' => 'content_text',
                'type' => 'wysiwyg',
                'label' => 'Texte d\'introduction',
                'tab' => 'Section d\'introduction'
            ]
        );
    }

    /**********PAGE ABOUT**********/
    private function about_index()
    {

        //Première Section

        // Title Section
        $this->crud->addField(
            [
                'name' => 'title_intro',
                'type' => 'text',
                'label' => 'Titre de la section',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Première section'
            ]
        );

        // Text Section
        $this->crud->addField(
            [
                'name' => 'text_intro',
                'type' => 'simplemde',
                'label' => 'Texte de la section',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Première section'
            ]
        );

        //Deuxième Section

        // Title Section
        $this->crud->addField(
            [
                'name' => 'title_secondIntro',
                'type' => 'text',
                'label' => 'Titre de la section',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Deuxième section'
            ]
        );

        // Text Section
        $this->crud->addField(
            [
                'name' => 'text_secondIntro',
                'type' => 'simplemde',
                'label' => 'Texte de la section',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Deuxième section'
            ]
        );

    }

    private function trainings_index()
    {
        $this->crud->addField(
            [
                'name' => 'content_text',
                'type' => 'wysiwyg',
                'label' => 'Texte d\'introduction',
                'tab' => 'Section d\'introduction'
            ]
        );
    }

    private function internships_index()
    {
        $this->crud->addField(
            [
                'name' => 'content_text',
                'type' => 'wysiwyg',
                'label' => 'Texte d\'introduction',
                'tab' => 'Section d\'introduction'
            ]
        );
    }

    private function competitions_index()
    {
        $this->crud->addField(
            [
                'name' => 'content_text',
                'type' => 'wysiwyg',
                'label' => 'Texte d\'introduction',
                'tab' => 'Section d\'introduction'
            ]
        );
    }

    private function articles_index()
    {
        $this->crud->addField(
            [
                'name' => 'content_text',
                'type' => 'wysiwyg',
                'label' => 'Texte d\'introduction',
                'tab' => 'Section d\'introduction'
            ]
        );
    }

    private function amenities_index()
    {
        $this->crud->addField(
            [
                'name' => 'content_text',
                'type' => 'wysiwyg',
                'label' => 'Texte d\'introduction',
                'tab' => 'Section d\'introduction'
            ]
        );
    }

    private function contact_index()
    {
        $this->crud->addField(
            [
                'name' => 'content_text',
                'type' => 'wysiwyg',
                'label' => 'Texte d\'introduction',
                'tab' => 'Section d\'introduction'
            ]
        );
    }
}
