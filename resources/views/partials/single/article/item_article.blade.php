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
                         alt="Photo de l'auteur : Anthony Beaumecker"
                         width="30"
                         height="30">
                </figure>
                <span class="news-home__author-name">par <span>{{ $article->author->fullname }}</span></span>
            </div>
            <h3 aria-level="3" class="news-home__title">{{ strip_tags(str_limit($article->title, 50, '...')) }}</h3>
            <p class="news-home__text">
                {{ strip_tags(str_limit($article->content, 255, '...')) }}
            </p>
            <span class="news-home__comments">{{ $article->comments->count() }}</span>
        </section>
        <a href="{{url('articles/' . $article->slug )}}" class="news-home__link" title="Vers la page de l'article : {{ $article->title }}"><span class="hidden">Vers la page de l'article : {{ $article->title }}</span></a>
    </div>
@endforeach