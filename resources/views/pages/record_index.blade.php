@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_about')
@section('pageTitle', 'Records')
@section('content')
    <div class="about__background">
        @include('partials.records.bloc-record')
    </div>
    <div class="wrap">
        @include('partials.cta.cta-about')
    </div>
@endsection