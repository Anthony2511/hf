@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_about')
@section('pageTitle', 'A Propos')
@section('content')
    <div class="about__background">
        @include('partials.about.about-intro')
        @include('partials.about.about-record')
        @include('partials.about.about-end')
    </div>
    <div class="wrap">
        @include('partials.cta.cta-about')
    </div>
@endsection