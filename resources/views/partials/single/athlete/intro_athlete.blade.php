<div class="athlete">
    <div class="athlete__container wrap">
        <figure class="athlete__figure">
            <img src="{{ $athlete->getImageProfile('_profile.jpg') }}"
                 srcset="{{ $athlete->getImageProfile('_profile.jpg') }} 2x"
                 alt="Image de l'athlète : {{$athlete->firstname}} {{$athlete->lastname}}"
                 width="335"
                 height="457">
        </figure>
        <div class="athlete__bloc">
            <section class="athlete__title">
                <h3 aria-level="3" role="heading" class="athlete__name">{{$athlete->firstname}}
                    <span>{{$athlete->lastname}}</span></h3>
                <span class="athlete__division">Senior</span>
            </section>
            <section class="athlete__info">
                <h4 class="title title__blue title__left title-size" aria-level="4" role="heading">Informations générales</h4>
                <div class="athlete__content-bloc">
                    <div class="athlete__content">
                        <span class="athlete__content-title">Discipline(s)</span>
                        <span class="athlete__content-text">1500m, 5000m</span>
                    </div>
                    <div class="athlete__content">
                        <span class="athlete__content-title">Date de naissance</span>
                        <datetime class="athlete__content-text" time="{{$athlete->date_of_birth}}">{{$athlete->date_of_birth}}</datetime>
                    </div>
                    <div class="athlete__content">
                        <span class="athlete__content-title">Statut</span>
                        <span class="athlete__content-text">{{$athlete->status}}</span>
                    </div>
                    <div class="athlete__content">
                        <span class="athlete__content-title">Profession</span>
                        <span class="athlete__content-text">Sportif sous contrat</span>
                    </div>
                    <div class="athlete__content">
                        <span class="athlete__content-title">Entraîneur</span>
                        <div class="athlete__trainer">
                            <figure class="athlete__trainer-figure">
                                <img src="../img/author.jpg"
                                     srcset="../img/author.jpg 2x"
                                     alt="Photo de l'entraîneur : Jean Dupont"
                                     width="30"
                                     height="30">
                            </figure>
                            <span class="athlete__content-text">Jean Dupont</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>