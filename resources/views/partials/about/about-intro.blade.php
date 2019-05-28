<div class="about__intro wrap">
    <section class="about__bloc about__bloc--one">
        <h2 aria-level="2" role="heading" class="about__title">{{ $page->title_intro }}</h2>
        <p class="about__text">
            {{ $page->text_intro }}
        </p>
        <figure class="about__figure">
            <img src="../img/photo.jpg"
                 srcset="../img/photo.jpg 2x"
                 alt="Photo de la première section"
                 width="516"
                 height="345">
        </figure>
    </section>
    <section class="about__bloc about__bloc--two">
        <figure class="about__figure-running">
            <img src="../img/running.png"
                 srcset="../img/running.png 2x"
                 alt="Photo de la deuxième section"
                 width="500"
                 height="501">
        </figure>
        <h2 aria-level="2" role="heading" class="about__subtitle">{{ $page->title_secondIntro }}</h2>
        <p class="about__text">
           {{ $page->text_secondIntro }}
        </p>
    </section>
</div>