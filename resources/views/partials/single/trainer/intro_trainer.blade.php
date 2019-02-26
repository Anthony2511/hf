<div class="athlete-intro">
    <div class="athlete-intro__container wrap">
        <figure class="athlete-intro__figure">
            <img src="{{ $trainer->getImageProfile('_profile.jpg') }}"
                 srcset="{{ $trainer->getImageProfile('_profile.jpg') }} 2x"
                 alt="Image de l'entraîneur : {{$trainer->firstname}} {{$trainer->lastname}}"
                 width="335"
                 height="457">
        </figure>
        <div class="athlete-intro__bloc">
            <section class="athlete-intro__title">
                <h3 aria-level="3" role="heading" class="athlete-intro__name">{{$trainer->firstname}}
                    <span>{{$trainer->lastname}}</span></h3>
                <span class="athlete-intro__division">Entraîneur</span>
            </section>
            <section class="athlete-intro__info">
                <h4 class="title title__blue title__left title-size" aria-level="4" role="heading">Informations
                    générales</h4>
                <div class="athlete-intro__content-bloc">
                    <div class="athlete-intro__content">
                        <span class="athlete-intro__content-title">Discipline(s)</span>
                        <span class="athlete-intro__content-text">1500m, 5000m</span>
                    </div>
                    <div class="athlete-intro__content">
                        <span class="athlete-intro__content-title">Date de naissance</span>
                        <datetime class="athlete-intro__content-text"
                                  time="{{$trainer->date_of_birth}}">{{$trainer->date_of_birth}}</datetime>
                    </div>
                    <div class="athlete-intro__content">
                        <span class="athlete-intro__content-title">Catégorie</span>
                        <span class="athlete-intro__content-text">Senior</span>
                    </div>
                    <div class="athlete-intro__content">
                        <span class="athlete-intro__content-title">Athlète(s)</span>
                        <a href="" class="athlete-intro__trainer-link">
                            <div class="athlete-intro__trainer">
                                <figure class="athlete-intro__trainer-figure">
                                    <img src="../img/author.jpg"
                                         srcset="../img/author.jpg 2x"
                                         alt="Photo de l'athlète : Arthur Dupont"
                                         width="30"
                                         height="30">
                                </figure>
                                <span class="athlete-intro__content-text">Arthur Dupont</span>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>