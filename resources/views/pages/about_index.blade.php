@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_about')

@section('content')
    <div class="wrap">
        @include('partials.about.about-intro')
    </div>
@endsection