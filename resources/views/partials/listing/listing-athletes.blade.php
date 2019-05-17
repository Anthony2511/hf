<p class="switcher__result">Résultat de la recherche : {{$athletes->count()}}</p>
<div class="home-athletes__container" id="container-ajax">
    @if($athletes->count() > 0)
        @foreach($athletes as $athlete)
            <div class="home-athletes__bloc">
                <figure class="home-athletes__figure">
                    <img src="{{ $athlete->getImageProfile('_profile.jpg') }}"
                         srcset="{{ $athlete->getImageProfile('_profile.jpg') }} 2x"
                         alt="Image de l'athlète : {{$athlete->fullname}}"
                         width="335"
                         height="457">
                </figure>
                <section class="home-athletes__infos">
                    <h4 class="home-athletes__infos-title">{{$athlete->firstname}}
                        <span>{{$athlete->lastname}}</span></h4>
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
                <a href="{{url('athletes/' . $athlete->slug )}}"
                   class="home-athletes__link"
                   title="Vers la page de l'athlète : {{$athlete->fullname}}"></a>
            </div>
        @endforeach
    @else
        <span class="empty">Il n'y pas d'athlètes correspondant à votre recherche</span>
    @endif
</div>
@if($athletes->count() >= 3)
    <noscript>
        {!! $athletes->render() !!}
    </noscript>
    <div class="load-more__container">
        <a href="{{ $athletes->nextPageUrl() }}" class="load-more" id="load-more">
                <span class="load-more__label">
                    <span class="load-more__label-text">Charger plus</span>
                </span>
        </a>
    </div>
@endif