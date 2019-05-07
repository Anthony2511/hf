<div class="intro">
    <figure class="intro__bloc-img" style="background-image: url('http://hf.test/img/intro-stage.jpg')">
        <img src="../img/intro-stage.jpg"
             srcset="../img/intro-stage.jpg 2x"
             alt="Image d'introduction pour les stages"
             width="614"
             height="409"
             class="hidden">
    </figure>
    <div class="intro__bloc wrap">
        <div class="intro__bloc-text">
            <h2 class="title title__blue title__left" aria-level="2" role="heading">{{ $page->stage_titleIntro }}</h2>
            <p class="intro__text">
                {{ $page->stage_textIntro }}
            </p>
            <a href="{{ route('equipements') }}" class="button" title="Vers les équipements">
                <span class="button-blue__left">Voir nos équipements</span>
                <i class="button-blue__right"></i>
            </a>
        </div>
    </div>

</div>