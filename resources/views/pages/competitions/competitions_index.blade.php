@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_athletes')

@section('content')
    @include('.partials.intros.intro-competition')
    <div class="wrap">
        @include('partials.switchers.switcher-competitions')
        @include('partials.listing.listing-competitions')
    </div>
@endsection