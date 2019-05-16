<section class="cta-compet cta-compet__background">
    <h2 aria-level="2" role="heading" class="title title__blue title__center">Prochaines compétitions</h2>
    <div class="listing-compet__container cta-compet__container wrap">
        @foreach($competitions as $competition)
            <div class="listing-compet__bloc cta-compet__bloc">
                <div class="compet-home__left-flex">
                    <time class="compet-home__bloc-date">
                        {{ date("d", strtotime($competition->startDate)) }}
                        <span>{{ substr($competition->getFullMonth(),0,4) }}</span></time>
                    <section>
                        <h3 class="compet-home__bloc-title" aria-level="3" role="heading">{{ $competition->title }}</h3>
                        <span class="compet-home__bloc-location">{{ $competition->place }}</span>
                    </section>
                </div>
                <a href="{{url('competitions/' . $competition->slug )}}" class="button-simple__size">En savoir plus</a>
                <a href="{{url('competitions/' . $competition->slug )}}" class="compet-home__link"></a>
            </div>
        @endforeach
    </div>
    <div class="cta-compet__button wrap">
        <a href="{{ route('competitions') }}" class="button" title="Vers la page des compétitions">
            <span class="button-blue__left">Voir tous les compétitions</span>
            <i class="button-blue__right"></i>
        </a>
    </div>
</section>