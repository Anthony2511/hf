@extends('layout')

@section('header')
    @include('partials.header')
@endsection

@section('class', 'index_athletes')

@section('content')
    @include('partials.intro-page')
    <div class="wrap">
        @include('partials.switchers.switcher-athletes')
        <div class="home-athletes__container">
            @foreach($athletes as $athlete)
                <div class="home-athletes__bloc">
                    <figure class="home-athletes__figure">
                        <img src="{{ $athlete->getImageProfile('_profile.jpg') }}"
                             srcset="../img/jeroen-dhoedt.jpg 2x"
                             alt="Image de l'athlète : Jeroen D'Hoedt"
                             width="335"
                             height="457">
                    </figure>
                    <section class="home-athletes__infos">
                        <h4 class="home-athletes__infos-title">{{$athlete->firstname}}
                            <span>{{$athlete->lastname}}</span></h4>
                        <span class="home-athletes__disciplines">1500m, 5000m</span>
                    </section>
                    <a href="{{url('athletes/' . $athlete->slug )}}"
                       class="home-athletes__link"
                       title="Vers la page de l'athlète : {{$athlete->firstname}} {{$athlete->lastname}}"></a>
                </div>
            @endforeach
        </div>
    </div>
@endsection