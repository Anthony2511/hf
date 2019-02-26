<div class="athlete-intro">
    <div class="athlete-intro__container wrap">
        <figure class="athlete-intro__figure">
            <img src="{{ $athlete->getImageProfile('_profile.jpg') }}"
                 srcset="{{ $athlete->getImageProfile('_profile.jpg') }} 2x"
                 alt="Image de l'athlète : {{$athlete->firstname}} {{$athlete->lastname}}"
                 width="335"
                 height="457">
        </figure>
        <div class="athlete-intro__bloc">
            <section class="athlete-intro__title">
                <h3 aria-level="3" role="heading" class="athlete-intro__name">{{$athlete->firstname}}
                    <span>{{$athlete->lastname}}</span></h3>
                <span class="athlete-intro__division">Senior</span>
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
                                  time="{{$athlete->date_of_birth}}">{{$athlete->date_of_birth}}</datetime>
                    </div>
                    <div class="athlete-intro__content">
                        <span class="athlete-intro__content-title">Statut</span>
                        <span class="athlete-intro__content-text">{{$athlete->status}}</span>
                    </div>
                    <div class="athlete-intro__content">
                        <span class="athlete-intro__content-title">Profession</span>
                        <span class="athlete-intro__content-text">Sportif sous contrat</span>
                    </div>
                    <div class="athlete-intro__content">
                        <span class="athlete-intro__content-title">Entraîneur</span>
                        <a href="" class="athlete-intro__trainer-link">
                            <div class="athlete-intro__trainer">
                                <figure class="athlete-intro__trainer-figure">
                                    <img src="../img/author.jpg"
                                         srcset="../img/author.jpg 2x"
                                         alt="Photo de l'entraîneur : Jean Dupont"
                                         width="30"
                                         height="30">
                                </figure>
                                <span class="athlete-intro__content-text">Jean Dupont</span>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>