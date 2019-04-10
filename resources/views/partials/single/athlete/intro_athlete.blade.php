<div class="athlete-intro">
    <div class="athlete-intro__container wrap">
        <figure class="athlete-intro__figure">
            <img src="{{ $athlete->getImageProfile('_profile.jpg') }}"
                 srcset="{{ $athlete->getImageProfile('_profile.jpg') }} 2x"
                 alt="Image de l'athlète : {{$athlete->fullname}}"
                 width="335"
                 height="457">
        </figure>
        <div class="athlete-intro__bloc">
            <section class="athlete-intro__title">
                <h3 aria-level="3" role="heading" class="athlete-intro__name">{{$athlete->fullname}}</h3>
                <span class="athlete-intro__division">{{$athlete->division['name']}}</span>
            </section>
            <section class="athlete-intro__info">
                <h4 class="title title__blue title__left title-size" aria-level="4" role="heading">
                    Informations générales
                </h4>
                <div class="athlete-intro__content-bloc">
                    <div class="athlete-intro__content">
                        <span class="athlete-intro__content-title">Discipline(s)</span>
                        @foreach($athlete->disciplines as $discipline)
                            <span class="athlete-intro__content-text">{{$discipline->name}}</span>
                        @endforeach
                    </div>
                    <div class="athlete-intro__content">
                        <span class="athlete-intro__content-title">Date de naissance</span>
                        <datetime class="athlete-intro__content-text"
                                  time="{{$athlete->getFormatDate()}}">{{$athlete->getFormatDate()}}</datetime>
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
                        <span class="athlete-intro__content-title">Entraîneur(s)</span>
                        @foreach($athlete->trainers as $trainer)
                            <a href="{{url('entraineurs/' . $trainer['slug'] )}}" class="athlete-intro__trainer-link">
                                <div class="athlete-intro__trainer">
                                    <figure class="athlete-intro__trainer-figure">
                                        <img src="{{ $trainer->getImageProfile('_preview.jpg') }}"
                                             srcset="{{ $trainer->getImageProfile('_preview.jpg') }} 2x"
                                             alt="Photo de l'entraîneur : {{$trainer->fullname}}"
                                             width="30"
                                             height="30">
                                    </figure>
                                    <span class="athlete-intro__content-text">{{$trainer->fullname}}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>