@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_training')
@section('pageTitle', 'Entrainements')
@section('content')
    @include('partials.intros.intro-training')
    <div class="wrap">
        @include('partials.switchers.switcher-trainings')
        @include('partials.listing.listing-trainings')
    </div>
@endsection