@extends('layout')


@section('class', 'index_athletes')

@section('content')
    <div>
        Bonjour tout le monde !

        @foreach($athletes as $athlete)
            <a href="{{url('athletes/' . $athlete->slug )}}">
                <p>{{$athlete->firstname}}</p>
            </a>
        @endforeach
    </div>
@endsection