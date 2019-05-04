<nav class="nav">
    <h1 class="hidden" aria-level="1" role="heading">Menu de navigation principal</h1>
    <button class="hamburger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div class="nav__container">
        <a href="/" class="nav__container-logo">
            <figure>
                <img src="../img/logo.png" srcset="../img/logo@2x.png 2x" width="175" height="37" alt="Logo du site">
            </figure>
        </a>
        <div class="nav__menu-bloc">
            <ul class="nav__menu">
                <li class="nav__item">
                    <a href="?union" class="nav__item-sub">
                        <span>Union Athlétique</span>
                    </a>
                    <div class="nav__sub-nav">
                        <ul class="sub-nav-group">
                            <li>
                                <a href="{{ route('a-propos') }}">&Aacute; Propos</a>
                            </li>
                            <li>
                                <a href="#">&Eacute;quipements et tarifs</a>
                            </li>
                            <li>
                                <a href="#">Nous rejoindre</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav__item">
                    <a href="{{ route('athletes') }}" class="{{setActive(['athletes'])}}">
                        <span>Athlètes</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{ route('entraineurs') }}" class="{{setActive(['entraineurs'])}}">
                        <span>Entraineurs</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{ route('articles') }}">
                        <span>Actualités</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="?agenda" class="nav__item-sub">
                        <span>Agenda</span>
                    </a>
                    <div class="nav__sub-nav">
                        <ul class="sub-nav-group">
                            <li>
                                <a href="{{ route('competitions') }}">Compétitions</a>
                            </li>
                            <li>
                                <a href="{{ route('entrainements') }}">Entraînements</a>
                            </li>
                            <li>
                                <a href="{{ route('stages') }}">Stages</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav__item">
                    <a href="#">
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>