@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_athletes')

@section('content')
    @include('partials.intros.intro-amenitie')
    <div class="wrap">
        <p>Page equipement</p>
        @include('partials.switchers.switcher-amenities')
    </div>
@endsection