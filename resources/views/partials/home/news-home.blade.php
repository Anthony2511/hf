<div class="news-home">
    <section class="wrap">
        <h2 class="title title__blue title__center" aria-level="2">Dernières actualités</h2>
        <div class="news-home__margin">
            <div class="news-home__container">
                @foreach($articles as $article)
                    <div class="news-home__bloc">
                        <figure class="news-home__figure">
                            <div class="news-home__bloc-figure">
                                <time class="news-home__date" datetime="{{ $article->date }}">{{ $article->getFullDate() }}</time>
                                <img src="{{ $article->getImageProfile('_profile.jpg') }}"
                                     srcset="{{ $article->getImageProfile('_profile.jpg') }} 2x"
                                     alt="{{ $article->title }}"
                                     width="541"
                                     height="250">
                            </div>
                        </figure>
                        <section class="news-home__sub-bloc">
                            <div class="news-home__author">
                                <figure class="news-home__author-figure">
                                    <img src="../img/author.jpg"
                                         srcset="../img/author.jpg 2x"
                                         alt="Photo de l'auteur : {{ $article->author->fullname }}"
                                         width="30"
                                         height="30">
                                </figure>
                                <span class="news-home__author-name">par <span>{{ $article->author->fullname }}</span></span>
                            </div>
                            <h3 aria-level="3" class="news-home__title">{{ strip_tags(str_limit($article->title, 50, '...')) }}</h3>
                            <p class="news-home__text">
                                {{ strip_tags(str_limit($article->content, 255, '...')) }}
                            </p>
                            <span class="news-home__comments">{{$article->comments->count()}}</span>
                        </section>
                        <a href="{{url('articles/' . $article->slug )}}" class="news-home__link"
                           title="Vers la page de l'article : {{ $article->title }}"  alt="Vers la page de l'article : {{ $article->title }}"></a>
                    </div>
                @endforeach
            </div>
            <a href="{{route('articles')}}" class="button" title="Vers la page de l'article : {{ $article->title }}" alt="Vers la page de l'article : {{ $article->title }}">
                <span class="button-blue__left">Voir toutes les actualités</span>
                <i class="button-blue__right"></i>
            </a>
        </div>
    </section>
</div>