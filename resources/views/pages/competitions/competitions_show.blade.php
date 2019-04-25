@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'show_athletes')

@section('content')
    <div class="wrap">
        <div class="breadcrumb">
            <a href="{{ route('competitions') }}" class="breadcrumb__item">Retour aux compétitions</a>
        </div>
    </div>
    <p>SALLUUT</p>
@endsection