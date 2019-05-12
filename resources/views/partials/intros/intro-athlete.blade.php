<div class="intro">
    <figure class="intro__bloc-img" style="background-image: url('http://hf.test/img/image-athletes.jpg')">
        <img src="../img/image-athletes.jpg"
             srcset="../img/image-athletes.jpg 2x"
             alt="Image d'introduction pour les athlètes"
             width="614"
             height="409"
             class="hidden">
    </figure>
    <div class="intro__bloc wrap">
        <div class="intro__bloc-text">
            <h2 class="title title__blue title__left" aria-level="2" role="heading">{{ $page->athlete_titleIntro }}</h2>
            <p class="intro__text">
                {{ $page->athlete_textIntro }}
            </p>
            <a href="{{ route('rejoindre') }}" class="button" title="Vers la page Nous rejoindre">
                <span class="button-blue__left">Rejoindre</span>
                <i class="button-blue__right"></i>
            </a>
        </div>
    </div>

</div>