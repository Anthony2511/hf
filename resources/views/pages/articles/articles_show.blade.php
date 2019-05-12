@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'show_athletes')

@section('content')
    <div class="wrap">
        <div class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
            <a href="{{ route('articles') }}" class="breadcrumb__item" itemprop="item" itemscope
               itemtype="http://schema.org/ListItem">
                <span itemprop="name">Retour aux actualités</span>
            </a>
        </div>
    </div>
    @include('partials.single.article.intro_article')
    @include('partials.single.article.content_article')
    @include('partials.single.article.comment_article')
@endsection