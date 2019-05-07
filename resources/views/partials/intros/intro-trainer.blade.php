<div class="intro">
    <figure class="intro__bloc-img" style="background-image: url('http://hf.test/img/image-trainers.jpg')">
        <img src="../img/image-trainers.jpg"
             srcset="../img/image-trainers.jpg 2x"
             alt="Image d'introduction pour les entraîneurs"
             width="614"
             height="409"
             class="hidden">
    </figure>
    <div class="intro__bloc wrap">
        <div class="intro__bloc-text">
            <h2 class="title title__blue title__left" aria-level="2" role="heading">{{ $page->trainer_titleIntro }}</h2>
            <p class="intro__text">
                {{ $page->trainer_textIntro }}
            </p>
            <a href="{{ route('entrainements') }}" class="button" title="Vers les entrainements">
                <span class="button-blue__left">Voir nos entrainements</span>
                <i class="button-blue__right"></i>
            </a>
        </div>
    </div>

</div>