@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'show_athletes')

@section('content')
    <div class="wrap">
        <div class="breadcrumb">
            <a href="{{ route('stages') }}" class="breadcrumb__item">Retour aux stages</a>
        </div>
    </div>
    <p>Page d'un stage ICI</p>
@endsection