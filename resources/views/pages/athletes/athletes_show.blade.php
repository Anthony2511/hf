@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'show_athletes')

@section('content')
    <div class="wrap">
        <div class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
            <a href="{{ route('athletes') }}" class="breadcrumb__item" itemprop="item" itemscope
               itemtype="http://schema.org/ListItem">
                <span itemprop="name">Retour aux athlètes</span>
            </a>
        </div>
    </div>
    @include('partials.single.athlete.intro_athlete')
    @include('partials.single.athlete.records_athlete')
    @include('partials.single.athlete.gallery_athlete')
    @include('partials.single.athlete.trophies_athlete')

    @foreach($athlete->trainings as $training)
        <p>{{ $training->specifictraining }}</p>
    @endforeach
@endsection