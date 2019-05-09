<p class="switcher__result">Résultat de la recherche : 3</p>
<div class="news-home listing-news">
    <div class="news-home__container">
        @foreach($articles as $article)
            <div class="news-home__bloc">
                <figure class="news-home__figure">
                    <div class="news-home__bloc-figure">
                        <time class="news-home__date">{{ $article->getFullDate() }}</time>
                        <img src="{{ $article->getImageProfile('_profile.jpg') }}"
                             srcset="{{ $article->getImageProfile('_profile.jpg') }} 2x"
                             alt="Record du club Martin Reip"
                             width="541"
                             height="250">
                    </div>
                </figure>
                <section class="news-home__sub-bloc">
                    <div class="news-home__author">
                        <figure class="news-home__author-figure">
                            <img src="../img/author.jpg"
                                 srcset="../img/author.jpg 2x"
                                 alt="Photo de l'auteur : Anthony Beaumecker"
                                 width="30"
                                 height="30">
                        </figure>
                        <span class="news-home__author-name">par <span>{{ $article->author->fullname }}</span></span>
                    </div>
                    <h3 aria-level="3" role="heading" class="news-home__title">{{ $article->title }}</h3>
                    <p class="news-home__text">
                      {{ $article->introduction }}
                    </p>
                    <span class="news-home__comments"> 3 commentaires</span>
                </section>
                <a href="{{url('articles/' . $article->slug )}}" class="news-home__link"></a>
            </div>
        @endforeach
    </div>
</div>