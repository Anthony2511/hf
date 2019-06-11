@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'show_athletes')
@section('pageTitle', 'Confirmation de stage')
@section('content')
    <div class="wrap">
        <div class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
            <a href="{{ route('stages') }}" class="breadcrumb__item" itemprop="item" itemscope
               itemtype="http://schema.org/ListItem">
                <span itemprop="name">Retour aux stages</span>
            </a>
        </div>
    </div>
    <div class="wrap">
        <p class="confirm-intro">
            Nous avons bien reçu votre pré-inscription pour le stage. Merci de nous faire confiance !
        </p>
    </div>
@endsection