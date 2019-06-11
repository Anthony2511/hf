@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_athletes')
@section('pageTitle', 'Athlètes')
@section('content')
    @include('partials.intros.intro-athlete')
    <div class="wrap">
        @include('partials.switchers.switcher-athletes')
        @include('partials.listing.listing-athletes')
    </div>
@endsection