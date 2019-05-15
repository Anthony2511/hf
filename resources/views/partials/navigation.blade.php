<nav class="nav">
    <h1 class="hidden" aria-level="1" role="heading">Menu de navigation principal</h1>
    <div class="nav__button">
        <div class="nav__icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="nav__container">
        <a href="/" class="nav__container-logo">
            <figure>
                <img src="../img/logo.png" srcset="../img/logo@2x.png 2x" width="175" height="37" alt="Logo du site">
            </figure>
        </a>
        <div class="nav__menu-bloc">
            <ul class="nav__menu">
                <li class="nav__item nav__item-sub">
                    <a href="?union" class="nav__item-sub">
                        <span>Union Athlétique</span>
                    </a>
                    <div class="nav__sub-nav nav__sub-nav--width">
                        <ul class="sub-nav-group">
                            <li class="nav__item">
                                <a href="{{ route('a-propos') }}" class="{{setActive(['a-propos'])}}"><span>&Aacute; Propos</span></a>
                            </li>
                            <li>
                                <a href="{{ route('equipements') }}" class="{{setActive(['equipements'])}}">Nos &Eacute;quipements</a>
                            </li>
                            <li>
                                <a href="{{ route('rejoindre') }}" class="{{setActive(['rejoindre'])}}">Nous
                                    rejoindre</a>
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
                    <a href="{{ route('articles') }}" class="{{setActive(['articles'])}}">
                        <span>Actualités</span>
                    </a>
                </li>
                <li class="nav__item nav__item-sub">
                    <a href="?agenda" class="nav__item-sub">
                        <span>Agenda</span>
                    </a>
                    <div class="nav__sub-nav">
                        <ul class="sub-nav-group">
                            <li>
                                <a href="{{ route('competitions') }}" class="{{setActive(['competitions'])}}">Compétitions</a>
                            </li>
                            <li>
                                <a href="{{ route('entrainements') }}" class="{{setActive(['entrainements'])}}">Entraînements</a>
                            </li>
                            <li>
                                <a href="{{ route('stages') }}" class="{{setActive(['stages'])}}">Stages</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav__item">
                    <a href="{{ route('contact') }}" class="{{setActive(['contact'])}}">
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>