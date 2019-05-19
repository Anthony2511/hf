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
                @foreach($trainer->disciplines->take(3) as $discipline)
                    {{$discipline->name}} {{ucfirst(substr($discipline->gender,-6,1))}}
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