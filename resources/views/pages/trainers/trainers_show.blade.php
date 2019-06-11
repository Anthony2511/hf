@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'show_athletes')
@section('pageTitle', 'Entraîneurs' . ' - ' . $trainer->fullname)
@section('content')
    <div class="wrap">
        <div class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
            <a href="{{ route('entraineurs') }}" class="breadcrumb__item" itemprop="item" itemscope
               itemtype="http://schema.org/ListItem">
                <span itemprop="name">Retour aux entraineurs</span>
            </a>
        </div>
    </div>
    @include('partials.single.trainer.intro_trainer')
    @include('partials.single.trainer.records_trainer')
    @include('partials.single.trainer.athlete_trainer')
    @include('partials.single.trainer.trophies_trainer')
    @include('partials.cta.cta-compet')
@endsection