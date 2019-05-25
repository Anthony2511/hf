<footer class="footer">
    <div class="footer__bg"></div>
    <div class="footer__bloc-container">
        <div class="footer__container wrap">
            <section class="footer__bloc">
                <h2 aria-level="2" role="heading" class="footer__title">Nous contactez</h2>
                <ul class="footer__contact-list">
                    <li class="footer__contact-item"><a href="mailto:philippe.devel@unamur.be">Verviers
                            <span>philippe.devel@unamur.be</span></a>
                    </li>
                    <li class="footer__contact-item"><a href="mailto:hf.aywaille@gmail.com">Aywaille
                            <span>hf.aywaille@gmail.com</span></a>
                    </li>
                    <li class="footer__contact-item"><a href="mailto:legrosandre@gmail.com">Stavelot
                            <span>legrosandre@gmail.com</span></a>
                    </li>
                    <li class="footer__contact-item"><a href="mailto:jhs105@hotmail.com">Saint-Vith
                            <span>jhs105@hotmail.com</span></a>
                    </li>
                </ul>
            </section>
            <section class="footer__bloc">
                <h2 aria-level="2" role="heading" class="footer__title">Derniers résultats</h2>
                <ul>
                    @foreach($competitions->take(3) as $competition)
                        <li class="footer__results-item"><a href="{{url('competitions/' . $competition->slug )}}" class="footer__results-link">{{$competition->title}} -
                                <time>{{$competition->getFormatStartDate()}}</time>
                            </a></li>
                    @endforeach
                </ul>
            </section>
            <section class="footer__bloc">
                <h2 aria-level="2" role="heading" class="footer__title">Nous suivre</h2>
                <ul class="footer__social">
                    <li class="footer__social-list">
                        <a href="#facebook" class="footer__social footer__social--facebook"><span class="hidden">Facebook</span></a>
                    </li>
                    <li class="footer__social-list">
                        <a href="#instagram" class="footer__social footer__social--instagram"><span class="hidden">Instagram</span></a>
                    </li>
                </ul>
            </section>
        </div>
        <div class="footer__copyright">
            <div class="wrap">
                <span>© 2018-2019 H-F, design by <a href="#">Anthony Beaumecker</a></span>
            </div>
        </div>
    </div>
</footer>