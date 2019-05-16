<div class="listing-compet__container">
    @foreach($competitions as $competition)
        <div class="listing-compet__bloc">
            <div class="compet-home__left-flex">
                <time class="compet-home__left-date
                <?php if($competition->content == null): ?>
                        compet-home__bloc-date
                        <?php else: ?><?php endif; ?>">
                    {{ date("d", strtotime($competition->startDate)) }}<span>{{ substr($competition->getFullMonth(),0,4) }}</span></time>
                <section>
                    <h3 class="compet-home__left-title
                    <?php if($competition->content == null): ?>
                            compet-home__bloc-title
                    <?php else: ?><?php endif; ?>" aria-level="3" role="heading">{{ $competition->title }}</h3>
                    <span class="compet-home__left-location
                    <?php if($competition->content == null): ?>
                            compet-home__bloc-location
                    <?php else: ?><?php endif; ?>">{{ $competition->place }}</span>
                </section>
            </div>
            @if( $competition->content !== null)
                <section>
                    <h4 class="compet-home__left-title" aria-level="4" role="heading">Informations générales</h4>
                    <p class="compet-home__left-text">
                        {{ $competition->content }}
                    </p>
                </section>
            @endif
            <a href="{{url('competitions/' . $competition->slug )}}" class="button-simple
                    <?php if($competition->content == null): ?>
                    button-simple__size
                    <?php else: ?><?php endif; ?>">En savoir plus</a>
            <a href="{{url('competitions/' . $competition->slug )}}" class="compet-home__link"></a>
        </div>
    @endforeach
</div>
</div>