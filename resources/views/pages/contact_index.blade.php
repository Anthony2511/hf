@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_about')

@section('content')
    <div class="about__background">
        @include('partials.contact.contact-intro')
        @include('partials.contact.contact-person')
    </div>
    @include('partials.contact.contact-form')
    @include('partials.cta.cta-compet')
@endsection