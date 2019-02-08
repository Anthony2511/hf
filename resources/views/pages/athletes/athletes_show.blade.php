@extends('layout')


@section('class', 'index_athletes')

@section('content')
    <div>
       Page de l'athlete {{ $athlete->firstname }}
    </div>
@endsection