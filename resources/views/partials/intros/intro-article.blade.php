<div class="intro">
    <figure class="intro__bloc-img" style="background-image: url('http://hf.test/img/image-trainers.jpg')">
        <img src="../img/image-trainers.jpg"
             srcset="../img/image-trainers.jpg 2x"
             alt="Image d'introduction pour les actualités"
             width="614"
             height="409"
             class="hidden">
    </figure>
    <div class="intro__bloc wrap">
        <div class="intro__bloc-text">
            <h2 class="intro__title" aria-level="2" role="heading">{{ $page->actu_titleIntro }}</h2>
            <p class="intro__text">
                {{ $page->actu_textIntro }}
            </p>
            <a href="#" class="button" title="Vers la page Nous rejoindre">
                <span class="button-blue__left">Nous rejoindre</span>
                <i class="button-blue__right"></i>
            </a>
        </div>
    </div>

</div>