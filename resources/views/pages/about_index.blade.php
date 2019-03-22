@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_about')

@section('content')
    <div class="background">
        @include('partials.about.about-intro')
        @include('partials.about.about-record')
        @include('partials.about.about-end')
    </div>
@endsection