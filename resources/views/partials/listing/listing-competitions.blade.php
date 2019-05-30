<p class="switcher__result">Résultat de la recherche : {{$competitions->count()}}</p>
<div class="listing-compet__container" id="container-ajax">
    @if($competitions->count() > 0)
        @foreach($competitions as $competition)
            <div class="listing-compet__bloc">
                <div class="compet-home__left-flex">
                    <time class="compet-home__left-date
                    <?php if($competition->content == null): ?>
                            compet-home__bloc-date
                    <?php else: ?><?php endif; ?>" datetime="{{$competition->startDate}}">
                        {{ date("d", strtotime($competition->startDate)) }}
                        <span>{{ substr($competition->getFullMonth(),0,4) }}</span></time>
                    <section>
                        <h3 class="compet-home__left-title
                    <?php if($competition->content == null): ?>
                                compet-home__bloc-title
<?php else: ?><?php endif; ?>" aria-level="3">{{ $competition->title }}</h3>
                        <span class="compet-home__left-location
                    <?php if($competition->content == null): ?>
                                compet-home__bloc-location
<?php else: ?><?php endif; ?>">{{ $competition->place }}</span>
                    </section>
                </div>
                @if( $competition->content !== null)
                    <section>
                        <h4 class="compet-home__left-title" aria-level="4">Informations générales</h4>
                        <p class="compet-home__left-text">
                            {{ strip_tags(str_limit($competition->content, 255, '...')) }}
                        </p>
                    </section>
                @endif
                <a href="{{url('competitions/' . $competition->slug )}}" class="button-simple
                    <?php if($competition->content == null): ?>
                        button-simple__size
<?php else: ?><?php endif; ?>" title="Vers la page de la compétition : {{ $competition->title }}">En savoir plus</a>
                <a href="{{url('competitions/' . $competition->slug )}}" class="compet-home__link" title="Vers la page de la compétition : {{ $competition->title }}"><span class="hidden">Vers la page de la compétition : {{ $competition->title }}</span></a>
            </div>
        @endforeach
    @else
        <span class="empty">Il n'y pas de compétitions correspondant à votre recherche</span>
    @endif
</div>
</div>

@if($competitions->count() >= 1)
    <noscript>
        {!! $competitions->render() !!}
    </noscript>
    <div class="load-more__container">
        <a href="{{ $competitions->nextPageUrl() . $getLoadMoreLink }}" class="load-more" id="load-more">
                <span class="load-more__label">
                    <span class="load-more__label-text">Charger plus de résultats</span>
                </span>
        </a>
    </div>
@endif