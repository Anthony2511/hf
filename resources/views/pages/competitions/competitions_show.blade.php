@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'show_athletes')

@section('content')
    <div class="wrap">
        <div class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
            <a href="{{ route('competitions') }}" class="breadcrumb__item" itemprop="item" itemscope
               itemtype="http://schema.org/ListItem">
                <span itemprop="name">Retour aux compétitions</span>
            </a>
        </div>
    </div>
    @include('partials.single.competition.intro_competition')
    @include('partials.single.competition.infos_competition')
    @include('partials.single.competition.horaires_competition')
    @include('partials.single.competition.resultats_competiton')
    @include('partials.single.competition.gallery_competition')
    @include('partials.cta.cta-stage')
@endsection