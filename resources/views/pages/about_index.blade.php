@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_about')

@section('content')
    @include('partials.intro-page')
    <div class="wrap">
        Page A Propos
    </div>
@endsection