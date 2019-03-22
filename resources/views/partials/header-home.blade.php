<header class="header-home" role="banner">
    <div class="wrap">
        @include('partials.navigation')
        <section class="header-home__bloc">
            <h1 class="header-home__title" role="heading" aria-level="1">L'union Athlétique des Hautes-Fagnes</h1>
            <p class="header-home__text">
                C'est un club d'athlétisme, composé de 4 sections situées en Province
                de Liège (Belgique) à Aywaille, Stavelot, St Vith et Verviers.
            </p>
            <a href="{{ route('a-propos') }}" class="button">
                <span class="button-white__left">En savoir plus</span>
                <i class="button-white__right"></i>
            </a>
        </section>
    </div>
</header>
<div>