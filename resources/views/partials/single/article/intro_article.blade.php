<div class="article-intro">
    <div class="article-intro__container">
        <figure class="article-intro__figure"
                style="background-image: url('{{ $article->getImageProfile('_fullscreen.jpg') }}')">
            <img src="{{ $article->getImageProfile('_fullscreen.jpg') }}"
                 srcset="{{ $article->getImageProfile('_fullscreen.jpg') }} 2x"
                 alt="Photo de l'article : {{$article->title}}"
                 width="1024"
                 height="683"
                 class="hidden">
            <div class="wrap">
                <time class="article-intro__date" datetime="{{ $article->date }}">{{ $article->getFullDate() }}</time>
            </div>
            <section class="article-intro__bloc">
                <h2 aria-level="2" class="article-intro__title">{{$article->title}}</h2>
                <div class="article-intro__author">
                    <figure class="article-intro__author-figure">
                        <img src="{{ $article->author->getImageProfile('_profile.jpg') }}"
                             srcset="{{ $article->author->getImageProfile('_profile.jpg') }}"
                             alt="Photo de l'auteur : {{ $article->author->fullname }}"
                             width="30"
                             height="30">
                    </figure>
                    <span class="article-intro__author-name">par <span>{{ $article->author->fullname }}</span></span>
                </div>
            </section>
        </figure>

    </div>
</div>