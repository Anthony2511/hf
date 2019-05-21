@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'show_athletes')

@section('content')
    <div class="wrap">
        <div class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
            <a href="{{ route('stages') }}" class="breadcrumb__item" itemprop="item" itemscope
               itemtype="http://schema.org/ListItem">
                <span itemprop="name">Retour aux stages</span>
            </a>
        </div>
    </div>
    <div class="wrap">
        Nous avons bien reçu votre demande de stage
    </div>
@endsection