<div class="home-athletes__container">
    @foreach($trainers as $trainer)
        <div class="home-athletes__bloc">
            <figure class="home-athletes__figure">
                <img src="{{ $trainer->getImageProfile('_profile.jpg') }}"
                     alt="Image de l'athlète : {{$trainer->firstname}} {{$trainer->lastname}}"
                     width="335"
                     height="457">
            </figure>
            <section class="home-athletes__infos">
                <h4 class="home-athletes__infos-title">{{$trainer->firstname}}
                    <span>{{$trainer->lastname}}</span></h4>
                <span class="home-athletes__disciplines">1500m, 5000m</span>
            </section>
            <a href="{{url('trainers/' . $trainer->slug )}}"
               class="home-athletes__link"
               title="Vers la page de l'athlète : {{$trainer->firstname}} {{$trainer->lastname}}"></a>
        </div>
    @endforeach
</div>