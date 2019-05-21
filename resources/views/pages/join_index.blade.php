@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_athletes')

@section('content')
    <div class="about__background">
        @include('partials.join.join_intro')
    </div>
@endsection