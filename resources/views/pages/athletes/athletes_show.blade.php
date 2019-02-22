@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'show_athletes')

@section('content')
    <div class="wrap">
        <div class="breadcrumb">
            <a href="{{ route('athletes') }}" class="breadcrumb__item">Retour aux athlètes</a>
        </div>
    </div>
    @include('partials.single.athlete.intro_athlete')
@endsection