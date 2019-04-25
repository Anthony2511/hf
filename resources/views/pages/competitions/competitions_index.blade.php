@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_competitions')

@section('content')
    <div class="wrap">
        @include('partials.switchers.switcher-competitions')
        @include('partials.listing.listing-competitions')
    </div>
@endsection