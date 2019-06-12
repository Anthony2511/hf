@foreach($trainers as $trainer)
    <div class="home-athletes__bloc">
        <figure class="home-athletes__figure">
            <img src="{{ $trainer->getImageProfile('_profile.jpg') }}"
                 alt="Image de l'entraîneur : {{$trainer->fullname}}"
                 width="335"
                 height="457">
        </figure>
        <a href="{{url('entraineurs/' . $trainer->slug )}}"
           class="home-athletes__link"
           title="Vers la page de l'entraîneur : {{$trainer->fullname}}"><span class="hidden">Vers la page de l'entraîneur : {{ $trainer->fullname }}</span>
            <section class="home-athletes__infos">
                <h3 class="home-athletes__infos-title" aria-level="3">{{$trainer->firstname}}
                    <span>{{$trainer->lastname}}</span></h3>
                <span class="home-athletes__disciplines">
                        @if(!empty (count($trainer->disciplines)))
                        @foreach($trainer->disciplines->take(3) as $discipline)
                            {{$discipline->name}} {{ucfirst(substr($discipline->gender,-6,1))}}
                        @endforeach
                    @else
                        N/A
                    @endif
                </span>
            </section></a>
    </div>
@endforeach