@extends('layout')


@section('class', 'index_athletes')

@section('content')
    <div>
        Bonjour tout le monde !

        @foreach($athletes as $athlete)
            <p>{{$athlete->firstname}}</p>
        @endforeach
    </div>
@endsection