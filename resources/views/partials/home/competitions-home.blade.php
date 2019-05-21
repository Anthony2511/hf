<div class="compet-home wrap">
    <h2 class="title title__blue title__center" aria-level="2" role="heading">Prochaines compétitions</h2>
    <div class="compet-home__container">
        @foreach($competitionsA as $competition)
            <div class="compet-home__bloc-left">
                <div class="compet-home__left-flex">
                    <time class="compet-home__left-date" datetime="{{$competition->startDate}}">
                        {{ date("d", strtotime($competition->startDate)) }}<span>{{ substr($competition->getFullMonth(),0,4) }}</span>
                    </time>
                    <section>
                        <h3 class="compet-home__left-title" aria-level="3" role="heading">{{ $competition->title }}</h3>
                        <span class="compet-home__left-location">{{ $competition->place }}</span>
                    </section>
                </div>
                <section class="compet-home__infos-bloc">
                    <h4 class="compet-home__left-title" aria-level="4" role="heading">Informations générales</h4>
                    <p class="compet-home__left-text">
                        {{ strip_tags(str_limit($competition->content, 255, '...')) }}
                    </p>
                    <a href="{{url('competitions/' . $competition->slug )}}" class="button-simple">En savoir plus</a>
                </section>
                <a href="{{url('competitions/' . $competition->slug )}}" class="compet-home__link"></a>
            </div>
        @endforeach
        <div class="compet-home__bloc-right">
            @foreach($competitionsB as $competition)
                <div class="compet-home__bloc">
                    <div class="compet-home__right-flex">
                        <time class="compet-home__bloc-date" datetime="{{$competition->startDate}}">
                            {{ date("d", strtotime($competition->startDate)) }}<span>{{ substr($competition->getFullMonth(),0,4) }}</span>
                        </time>
                        <section>
                            <h3 class="compet-home__bloc-title" aria-level="3" role="heading">{{ $competition->title }}</h3>
                            <span class="compet-home__bloc-location">{{ $competition->place }}</span>
                        </section>
                    </div>
                    <a href="{{url('competitions/' . $competition->slug )}}" class="button-simple__size">En savoir plus</a>
                    <a href="{{url('competitions/' . $competition->slug )}}" class="compet-home__link"></a>
                </div>
            @endforeach

            <a href="{{ route('competitions') }}" class="button button-float">
                <span class="button-blue__left">Voir toutes les compétitions</span>
                <i class="button-blue__right"></i>
            </a>
        </div>
    </div>
</div>
</div>