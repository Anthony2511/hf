@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_athletes')

@section('content')
    @include('partials.intros.intro-amenitie')
    <div class="wrap">
        @include('partials.switchers.switcher-amenities')
        @include(('partials.listing.listing-amenities'))
    </div>
@endsection