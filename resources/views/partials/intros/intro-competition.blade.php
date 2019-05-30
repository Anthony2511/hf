<div class="intro">
    <figure class="intro__bloc-img" style="background-image: url('http://hf.test/img/image-training.jpg')">
        <img src="../img/image-training.jpg"
             srcset="../img/image-training.jpg 2x"
             alt="Image d'introduction pour les compétitions"
             width="614"
             height="409"
             class="hidden">
    </figure>
    <div class="intro__bloc wrap">
        <div class="intro__bloc-text">
            <h2 class="intro__title" aria-level="2">{{ $page->compet_titleIntro }}</h2>
            <p class="intro__text">
                {{ $page->compet_textIntro }}
            </p>
            <a href="{{route('entrainements')}}" class="button" title="Vers les entraînements">
                <span class="button-blue__left">Voir nos entraînements</span>
                <i class="button-blue__right"></i>
            </a>
        </div>
    </div>

</div>