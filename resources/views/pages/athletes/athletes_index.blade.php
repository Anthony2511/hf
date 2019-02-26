@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_athletes')

@section('content')
    @include('partials.intro-page')
    <div class="wrap">
        @include('partials.switchers.switcher-athletes')
        @include('partials.listing.listing-athletes')
    </div>
@endsection