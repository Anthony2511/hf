<div class="athlete-intro">
    <div class="athlete-intro__container wrap">
        <figure class="athlete-intro__figure">
            <img src="{{ $trainer->getImageProfile('_profile.jpg') }}"
                 srcset="{{ $trainer->getImageProfile('_profile.jpg') }} 2x"
                 alt="Image de l'entraîneur : {{$trainer->fullname}}"
                 width="335"
                 height="457">
        </figure>
        <div class="athlete-intro__bloc">
            <section class="athlete-intro__title">
                <h3 aria-level="3" class="athlete-intro__name">{{$trainer->firstname}}
                    <span>{{$trainer->lastname}}</span></h3>
                <span class="athlete-intro__division">{{$trainer->status}}</span>
            </section>
            <section class="athlete-intro__info">
                <h4 class="athlete-intro__title-infos" aria-level="4" role="heading">Informations
                    générales</h4>
                <div class="athlete-intro__content-bloc">
                    <div class="athlete-intro__content">
                        <span class="athlete-intro__content-title">Discipline(s)</span>
                        <div class="athlete-intro__bloc-discipline">
                            @if(!empty (count($trainer->disciplines)))
                                @foreach($trainer->disciplines as $discipline)
                                    <span class="athlete-intro__content-text athlete-intro__content-text--discipline">{{$discipline->name}} {{ucfirst(substr($discipline->gender,-6,1))}}</span>
                                @endforeach
                            @else
                                <p class="empty">Aucune discipline</p>
                            @endif
                        </div>
                    </div>
                    <div class="athlete-intro__content">
                        <span class="athlete-intro__content-title">Date de naissance</span>
                        <datetime class="athlete-intro__content-text"
                                  time="{{$trainer->getFormatDate()}}">{{$trainer->getFormatDate()}}</datetime>
                    </div>
                    <div class="athlete-intro__content athlete-intro__content--width">
                        <span class="athlete-intro__content-title">Catégorie(s)</span>
                        <div class="athlete-intro__bloc-division">
                            @if(!empty (count($trainer->divisions)))
                                @foreach($trainer->divisions as $division)
                                    <span class="athlete-intro__content-text athlete-intro__content-text--division">{{$division->name}} {{ucfirst(substr($division->gender,-6,1))}}</span>
                                @endforeach
                            @else
                                <p class="empty">Aucune catégorie</p>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>