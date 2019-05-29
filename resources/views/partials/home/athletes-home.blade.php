<div class="background-home">
    <div class="home-athletes wrap">
        <h2 class="title title__blue title__left" aria-level="2">Nos athlètes</h2>
        <div class="home-athletes__container">
            @foreach($athletes as $athlete)
                <div class="home-athletes__bloc">
                    <figure class="home-athletes__figure">
                        <img src="{{ $athlete->getImageProfile('_profile.jpg') }}"
                             srcset="{{ $athlete->getImageProfile('_profile.jpg') }} 2x"
                             alt="Image de l'athlète : {{ $athlete->fullname }}"
                             width="335"
                             height="457">
                    </figure>
                    <section class="home-athletes__infos">
                        <h3 class="home-athletes__infos-title" aria-level="3">{{ $athlete->firstname }}
                            <span>{{ $athlete->lastname }}</span></h3>
                        <div class="home-athletes__disciplines">
                            @if(!empty (count($athlete->disciplines)))
                                @foreach($athlete->disciplines->take(3) as $discipline)
                                    <span>
                                           {{$discipline->name}} {{ucfirst(substr($discipline->gender,-6,1))}}
                                    </span>
                                @endforeach
                            @else
                                N/A
                            @endif
                        </div>
                    </section>
                    <a href="{{url('athletes/' . $athlete->slug )}}" class="home-athletes__link"
                       title="Vers la page de l'athlète : {{ $athlete->fullname }}"  alt="Vers la page de l'athlète : {{ $athlete->fullname }}"></a>
                </div>
            @endforeach
        </div>
        <a href="{{ route('athletes') }}" class="button" title="Vers tous les athlètes">
            <span class="button-blue__left">Voir tous les athlètes</span>
            <i class="button-blue__right"></i>
        </a>
    </div>