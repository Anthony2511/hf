@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_competitions')

@section('content')
    @include('partials.intros.intro-article')
    <div class="wrap">
        @include('partials.switchers.switcher-articles')
    </div>
@endsection