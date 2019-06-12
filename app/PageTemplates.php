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
        //Section VERVIERS
        // Place Verviers
        $this->crud->addField(
            [
                'name' => 'contact_verviersPlace',
                'type' => 'text',
                'label' => 'Adresse',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Verviers'
            ]
        );
        // Email Verviers
        $this->crud->addField(
            [
                'name' => 'contact_verviersEmail',
                'type' => 'email',
                'label' => 'Adresse email',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Verviers'
            ]
        );
        // Phone Verviers
        $this->crud->addField(
            [
                'name' => 'contact_verviersPhone',
                'type' => 'text',
                'label' => 'Numéro de Téléphone',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Verviers'
            ]
        );
        //Section Aywaille
        // Place Aywaille
        $this->crud->addField(
            [
                'name' => 'contact_aywaillePlace',
                'type' => 'text',
                'label' => 'Adresse',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Aywaille'
            ]
        );
        // Email Aywaile
        $this->crud->addField(
            [
                'name' => 'contact_aywailleEmail',
                'type' => 'email',
                'label' => 'Adresse email',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Aywaille'
            ]
        );
        // Phone Aywaille
        $this->crud->addField(
            [
                'name' => 'contact_aywaillePhone',
                'type' => 'text',
                'label' => 'Numéro de Téléphone',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Aywaille'
            ]
        );
        //Section Stavelot
        // Place Stavelot
        $this->crud->addField(
            [
                'name' => 'contact_stavelotPlace',
                'type' => 'text',
                'label' => 'Adresse',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Stavelot'
            ]
        );
        // Email Stavelot
        $this->crud->addField(
            [
                'name' => 'contact_stavelotEmail',
                'type' => 'email',
                'label' => 'Adresse email',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Stavelot'
            ]
        );
        // Phone Stavelot
        $this->crud->addField(
            [
                'name' => 'contact_stavelotPhone',
                'type' => 'text',
                'label' => 'Numéro de Téléphone',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Stavelot'
            ]
        );
        //Section Saint-Vith
        // Place Saint-Vith
        $this->crud->addField(
            [
                'name' => 'contact_saintvithPlace',
                'type' => 'text',
                'label' => 'Adresse',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Saint-Vith'
            ]
        );
        // Email Saint-Vith
        $this->crud->addField(
            [
                'name' => 'contact_saintvithEmail',
                'type' => 'email',
                'label' => 'Adresse email',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Saint-Vith'
            ]
        );
        // Phone Saint-Vith
        $this->crud->addField(
            [
                'name' => 'contact_saintvithPhone',
                'type' => 'text',
                'label' => 'Numéro de Téléphone',
                'fake' => true,
                'store_in' => 'extras',
                'tab' => 'Saint-Vith'
            ]
        );
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

    private function record_index()
    {
        // Records Benjamin Garcons Field
        $this->crud->addField
        ([
            'name' => 'record_benjaminhommes',
            'label' => 'Benjamins Garçons',
            'type' => 'table',
            'fake' => true,
            'store_in' => 'extras',
            'entity_singular' => 'un record', // used on the "Add X" button
            'columns' => [
                'discipline' => 'Discipline',
                'record' => 'Record',
                'athlete' => 'Athlète',
                'lieu' => 'Lieu',
                'date' => 'Date'
            ],
            'tab' => 'Benjamins'
        ]);

        // Records Benjamin Filles Field
        $this->crud->addField
        ([
            'name' => 'record_benjaminfilles',
            'label' => 'Benjamins Filles',
            'type' => 'table',
            'fake' => true,
            'store_in' => 'extras',
            'entity_singular' => 'un record', // used on the "Add X" button
            'columns' => [
                'discipline' => 'Discipline',
                'record' => 'Record',
                'athlete' => 'Athlète',
                'lieu' => 'Lieu',
                'date' => 'Date'
            ],
            'tab' => 'Benjamins'
        ]);

        // Records Pupilles Garcons Field
        $this->crud->addField
        ([
            'name' => 'record_pupilleshommes',
            'label' => 'Pupilles Garçons',
            'type' => 'table',
            'fake' => true,
            'store_in' => 'extras',
            'entity_singular' => 'un record', // used on the "Add X" button
            'columns' => [
                'discipline' => 'Discipline',
                'record' => 'Record',
                'athlete' => 'Athlète',
                'lieu' => 'Lieu',
                'date' => 'Date'
            ],
            'tab' => 'Pupilles'
        ]);

        // Records Pupilles Filles Field
        $this->crud->addField
        ([
            'name' => 'record_pupillesfilles',
            'label' => 'Pupilles Filles',
            'type' => 'table',
            'fake' => true,
            'store_in' => 'extras',
            'entity_singular' => 'un record', // used on the "Add X" button
            'columns' => [
                'discipline' => 'Discipline',
                'record' => 'Record',
                'athlete' => 'Athlète',
                'lieu' => 'Lieu',
                'date' => 'Date'
            ],
            'tab' => 'Pupilles'
        ]);

        // Records Minimes Garcons Field
        $this->crud->addField
        ([
            'name' => 'record_minimeshommes',
            'label' => 'Minimes Garçons',
            'type' => 'table',
            'fake' => true,
            'store_in' => 'extras',
            'entity_singular' => 'un record', // used on the "Add X" button
            'columns' => [
                'discipline' => 'Discipline',
                'record' => 'Record',
                'athlete' => 'Athlète',
                'lieu' => 'Lieu',
                'date' => 'Date'
            ],
            'tab' => 'Minimes'
        ]);

        // Records Minimes Filles Field
        $this->crud->addField
        ([
            'name' => 'record_minimesfilles',
            'label' => 'Minimes Filles',
            'type' => 'table',
            'fake' => true,
            'store_in' => 'extras',
            'entity_singular' => 'un record', // used on the "Add X" button
            'columns' => [
                'discipline' => 'Discipline',
                'record' => 'Record',
                'athlete' => 'Athlète',
                'lieu' => 'Lieu',
                'date' => 'Date'
            ],
            'tab' => 'Minimes'
        ]);

        // Records Cadets Hommes Field
        $this->crud->addField
        ([
            'name' => 'record_cadetshommes',
            'label' => 'Cadets Hommes',
            'type' => 'table',
            'fake' => true,
            'store_in' => 'extras',
            'entity_singular' => 'un record', // used on the "Add X" button
            'columns' => [
                'discipline' => 'Discipline',
                'record' => 'Record',
                'athlete' => 'Athlète',
                'lieu' => 'Lieu',
                'date' => 'Date'
            ],
            'tab' => 'Cadets'
        ]);

        // Records Cadettes Femmes Field
        $this->crud->addField
        ([
            'name' => 'record_cadettesfilles',
            'label' => 'Cadettes Femmes',
            'type' => 'table',
            'fake' => true,
            'store_in' => 'extras',
            'entity_singular' => 'un record', // used on the "Add X" button
            'columns' => [
                'discipline' => 'Discipline',
                'record' => 'Record',
                'athlete' => 'Athlète',
                'lieu' => 'Lieu',
                'date' => 'Date'
            ],
            'tab' => 'Cadets'
        ]);
    }
}
