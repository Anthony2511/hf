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
    <div>
        Page d'un entraineur,ICI
    </div>
@endsection