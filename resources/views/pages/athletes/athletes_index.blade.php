@extends('layout')


@section('class', 'index_athletes')

@section('content')
    <div>
        Bonjour tout le monde !
        <a href="{{url('/')}}">HOME</a>
        @foreach($athletes as $athlete)
            <a href="{{url('athletes/' . $athlete->slug )}}">
                <p>{{$athlete->firstname}}</p>
            </a>
        @endforeach
    </div>
@endsection