@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_about')

@section('content')
    <div class="about__background">
        @include('partials.join.join_intro')
    </div>
    @include('partials.join.join_contact')
    @include('partials.cta.cta-compet')
@endsection