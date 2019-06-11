@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'show_athletes')
@section('pageTitle', 'Stages' . ' - ' . $internship->title)
@section('content')
    <div class="wrap">
        <div class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
            <a href="{{ route('stages') }}" class="breadcrumb__item" itemprop="item" itemscope
               itemtype="http://schema.org/ListItem">
                <span itemprop="name">Retour aux stages</span>
            </a>
        </div>
    </div>
    @include('partials.single.internship.intro_internship')
    @include('partials.single.internship.form_internship')
    @include('partials.cta.cta-stage')
@endsection