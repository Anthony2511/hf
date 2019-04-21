@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_athletes')

@section('content')
    @include('partials.intros.intro-trainer')
    <div class="wrap">
        @include('partials.switchers.switcher-trainers')
        @include('partials.listing.listing-trainers')
    </div>
@endsection