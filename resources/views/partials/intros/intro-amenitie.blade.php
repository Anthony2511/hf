<div class="intro">
    <figure class="intro__bloc-img" style="background-image: url('http://hf.test/img/intro-equipements.jpg')">
        <img src="../img/intro-equipements.jpg"
             srcset="../img/intro-equipements.jpg 2x"
             alt="Image d'introduction pour les équipements"
             width="614"
             height="409"
             class="hidden">
    </figure>
    <div class="intro__bloc wrap">
        <div class="intro__bloc-text">
            <h2 class="intro__title" aria-level="2">{{ $page->equipement_titleIntro }}</h2>
            <p class="intro__text">
               {{ $page->equipement_textIntro }}
            </p>
            <a href="{{ route('contact') }}" class="button" title="Vers la page contact">
                <span class="button-blue__left">Nous contacter</span>
                <i class="button-blue__right"></i>
            </a>
        </div>
    </div>

</div>