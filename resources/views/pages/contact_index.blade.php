@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_about')

@section('content')
    <div class="about__background">
        Page contact
    </div>
    <div class="wrap">
        @include('partials.cta-page')
    </div>
@endsection