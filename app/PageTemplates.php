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

    /**********PAGE ATHLETES**********/
    private function athletes_index()
    {

        //Section d'introduction

        // Title Intro
        $this->crud->addField(
            [
                'name' => 'athlete_titleIntro',
                'type' => 'text',
                'label' => 'Titre de l\'introduction',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Section d\'introduction'
            ]
        );

        // Text Intro
        $this->crud->addField(
            [
                'name' => 'athlete_textIntro',
                'type' => 'simplemde',
                'label' => 'Texte de l\'introduction',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Section d\'introduction'
            ]
        );
    }

    /**********PAGE ENTRAINEURS**********/
    private function trainers_index()
    {
        //Section d'introduction

        // Title Intro
        $this->crud->addField(
            [
                'name' => 'trainer_titleIntro',
                'type' => 'text',
                'label' => 'Titre de l\'introduction',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Section d\'introduction'
            ]
        );

        // Text Intro
        $this->crud->addField(
            [
                'name' => 'trainer_textIntro',
                'type' => 'simplemde',
                'label' => 'Texte de l\'introduction',
                'fake' => true,
                'store_in' => 'extras',
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

        //Troisième Section

        // Title Section
        $this->crud->addField(
            [
                'name' => 'title_threeIntro',
                'type' => 'text',
                'label' => 'Titre de la section',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Troisième section'
            ]
        );

        // Text Section
        $this->crud->addField(
            [
                'name' => 'text_threeIntro',
                'type' => 'simplemde',
                'label' => 'Texte de la section',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Troisième section'
            ]
        );

        //Quatrième Section

        // Title Section
        $this->crud->addField(
            [
                'name' => 'title_fourIntro',
                'type' => 'text',
                'label' => 'Titre de la section',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Quatrième section'
            ]
        );

        // Text Section
        $this->crud->addField(
            [
                'name' => 'text_fourIntro',
                'type' => 'simplemde',
                'label' => 'Texte de la section',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Quatrième section'
            ]
        );

    }

    /**********PAGE ENTRAINEMENTS**********/
    private function trainings_index()
    {
        //Section d'introduction

        // Title Intro
        $this->crud->addField(
            [
                'name' => 'training_titleIntro',
                'type' => 'text',
                'label' => 'Titre de l\'introduction',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Section d\'introduction'
            ]
        );

        // Text Intro
        $this->crud->addField(
            [
                'name' => 'training_textIntro',
                'type' => 'simplemde',
                'label' => 'Texte de l\'introduction',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Section d\'introduction'
            ]
        );
    }

    /**********PAGE STAGES**********/
    private function internships_index()
    {
        //Section d'introduction

        // Title Intro
        $this->crud->addField(
            [
                'name' => 'stage_titleIntro',
                'type' => 'text',
                'label' => 'Titre de l\'introduction',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Section d\'introduction'
            ]
        );

        // Text Intro
        $this->crud->addField(
            [
                'name' => 'stage_textIntro',
                'type' => 'simplemde',
                'label' => 'Texte de l\'introduction',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Section d\'introduction'
            ]
        );
    }

    /**********PAGE COMPÉTITIONS**********/
    private function competitions_index()
    {
        //Section d'introduction

        // Title Intro
        $this->crud->addField(
            [
                'name' => 'compet_titleIntro',
                'type' => 'text',
                'label' => 'Titre de l\'introduction',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Section d\'introduction'
            ]
        );

        // Text Intro
        $this->crud->addField(
            [
                'name' => 'compet_textIntro',
                'type' => 'simplemde',
                'label' => 'Texte de l\'introduction',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Section d\'introduction'
            ]
        );
    }

    /**********PAGE ACTUALITÉS**********/
    private function articles_index()
    {
        //Section d'introduction

        // Title Intro
        $this->crud->addField(
            [
                'name' => 'actu_titleIntro',
                'type' => 'text',
                'label' => 'Titre de l\'introduction',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Section d\'introduction'
            ]
        );

        // Text Intro
        $this->crud->addField(
            [
                'name' => 'actu_textIntro',
                'type' => 'simplemde',
                'label' => 'Texte de l\'introduction',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Section d\'introduction'
            ]
        );
    }

    /**********PAGE EQUIPEMENTS**********/
    private function amenities_index()
    {
        //Section d'introduction

        // Title Intro
        $this->crud->addField(
            [
                'name' => 'equipement_titleIntro',
                'type' => 'text',
                'label' => 'Titre de l\'introduction',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Section d\'introduction'
            ]
        );

        // Text Intro
        $this->crud->addField(
            [
                'name' => 'equipement_textIntro',
                'type' => 'simplemde',
                'label' => 'Texte de l\'introduction',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Section d\'introduction'
            ]
        );
    }

    /**********PAGE NOUS REJOINDRE**********/
    private function join_index()
    {
        //Section d'introduction

        // Title Intro
        $this->crud->addField(
            [
                'name' => 'join_titleIntro',
                'type' => 'text',
                'label' => 'Titre de l\'introduction',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Section d\'introduction'
            ]
        );

        // Text Intro
        $this->crud->addField(
            [
                'name' => 'join_textIntro',
                'type' => 'simplemde',
                'label' => 'Texte de l\'introduction',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Section d\'introduction'
            ]
        );
    }

    /**********PAGE CONTACT**********/
    private function contact_index()
    {

    }

    private function home_index()
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
