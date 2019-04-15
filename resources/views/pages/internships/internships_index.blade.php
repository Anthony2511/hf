@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_training')

@section('content')
    @include('partials.intro-page')
    <div class="wrap">
        @include('partials.switchers.switcher-internships')
        @include('partials.listing.listing-internships')
    </div>
@endsection