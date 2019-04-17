<p class="switcher__result">Résultat de la recherche : 3</p>
<div class="home-athletes__container">
    @foreach($trainers as $trainer)
        <div class="home-athletes__bloc">
            <figure class="home-athletes__figure">
                <img src="{{ $trainer->getImageProfile('_profile.jpg') }}"
                     alt="Image de l'entraîneur : {{$trainer->fullname}}"
                     width="335"
                     height="457">
            </figure>
            <section class="home-athletes__infos">
                <h4 class="home-athletes__infos-title">{{$trainer->firstname}}
                    <span>{{$trainer->lastname}}</span></h4>
                <span class="home-athletes__disciplines">
                        @if(!empty (count($trainer->disciplines)))
                        @foreach($trainer->disciplines as $discipline)
                            {{$discipline->name}}
                        @endforeach
                    @else
                        N/A
                    @endif
                    </span>
            </section>
            <a href="{{url('entraineurs/' . $trainer->slug )}}"
               class="home-athletes__link"
               title="Vers la page de l'entraîneur : {{$trainer->fullname}}"></a>
        </div>
    @endforeach
</div>