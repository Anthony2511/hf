<footer class="footer">
    <div class="footer__bg"></div>
    <div class="footer__bloc-container" itemscope itemtype="http://schema.org/Organization">
        <div class="footer__container wrap">
            <section class="footer__bloc">
                <h2 aria-level="2" class="footer__title">Nous contacter</h2>
                <ul class="footer__contact-list">
                    <li class="footer__contact-item"><a href="mailto:philippe.devel@unamur.be"
                                                        itemprop="email">Verviers
                            <span>philippe.devel@unamur.be</span></a>
                    </li>
                    <li class="footer__contact-item"><a href="mailto:hf.aywaille@gmail.com"
                                                        itemprop="email">Aywaille
                            <span>hf.aywaille@gmail.com</span></a>
                    </li>
                    <li class="footer__contact-item"><a href="mailto:legrosandre@hotmail.com"
                                                        itemprop="email">Stavelot
                            <span>legrosandre@hotmail.com</span></a>
                    </li>
                    <li class="footer__contact-item"><a href="mailto:jhs105@hotmail.com"
                                                        itemprop="email">Saint-Vith
                            <span>jhs105@hotmail.com</span></a>
                    </li>
                </ul>
            </section>
            <section class="footer__bloc">
                <h2 aria-level="2" class="footer__title">Derniers résultats</h2>
                <ul>
                    @foreach($competitions->take(3) as $competition)
                        <li class="footer__results-item"><a href="{{url('competitions/' . $competition->slug )}}"
                                                            class="footer__results-link"
                                                            title="Vers la page de la compétition : {{ $competition->title }}">{{$competition->title}}
                                -
                                <time datetime="{{$competition->startDate}}">{{$competition->getFormatStartDate()}}</time>
                            </a></li>
                    @endforeach
                </ul>
            </section>
            <section class="footer__bloc">
                <h2 aria-level="2" class="footer__title">Nous suivre</h2>
                <ul class="footer__social">
                    <li class="footer__social-list">
                        <a href="https://www.facebook.com/" class="footer__social footer__social--facebook"
                           target="_blank" itemprop="url"
                           title="Vers notre page Facebook"><span
                                    class="hidden">Facebook</span></a>
                    </li>
                    <li class="footer__social-list">
                        <a href="https://www.instagram.com/"
                           class="footer__social footer__social--instagram" target="_blank" itemprop="url"
                           title="Vers notre page Instagram"><span class="hidden">Instagram</span></a>
                    </li>
                </ul>
            </section>
        </div>
        <div class="footer__copyright">
            <div class="wrap">
                <span>© 2018-2019 H-F, design by <a href="#" title="Vers la page du développeur">Anthony Beaumecker</a></span>
            </div>
        </div>
    </div>
</footer>