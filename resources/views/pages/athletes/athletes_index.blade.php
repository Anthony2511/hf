@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_athletes')

@section('content')
    @include('partials.intro-page')
    <div>
        <a href="{{url('/')}}">HOME</a>
        @foreach($athletes as $athlete)
            <a href="{{url('athletes/' . $athlete->slug )}}">
                <p>{{$athlete->firstname}}</p>
            </a>
        @endforeach
    </div>
@endsection