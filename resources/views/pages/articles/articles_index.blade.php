@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_athletes')

@section('content')
    @include('partials.intros.intro-article')
    <div class="wrap">
        @include('partials.switchers.switcher-articles')
        @include('partials.listing.listing-articles')
    </div>
@endsection