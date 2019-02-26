@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'show_athletes')

@section('content')
    <div class="wrap">
        <div class="breadcrumb">
            <a href="{{ route('trainers') }}" class="breadcrumb__item">Retour aux entraîneurs</a>
        </div>
    </div>
    @include('partials.single.trainer.intro_trainer')
    @include('partials.single.trainer.records_trainer')
    @include('partials.single.trainer.gallery_trainer')
    @include('partials.single.trainer.trophies_trainer')
@endsection