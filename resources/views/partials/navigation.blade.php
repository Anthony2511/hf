<nav class="nav">
    <h2 class="hidden">Menu de navigation principal</h2>
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
                    <a href="?union">
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
                    <a href="{{ route('athletes') }}">
                        <span>Athlètes</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{ route('entraineurs') }}">
                        <span>Entraineurs</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#">
                        <span>Actualités</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="?agenda">
                        <span>Agenda</span>
                    </a>
                    <div class="nav__sub-nav">
                        <ul class="sub-nav-group">
                            <li><a href="#">Compétitions</a></li>
                            <li><a href="#">Entraînements</a></li>
                            <li><a href="#">Stages</a></li>
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