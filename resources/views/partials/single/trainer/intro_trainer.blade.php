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
                <h2 aria-level="2" class="athlete-intro__name">{{$trainer->firstname}}
                    <span>{{$trainer->lastname}}</span></h2>
                <span class="athlete-intro__division">{{$trainer->status}}</span>
            </section>
            <section class="athlete-intro__info">
                <h3 class="athlete-intro__title-infos" aria-level="3">Informations
                    générales</h3>
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
                        <time class="athlete-intro__content-text"
                                  datetime="{{$trainer->date_of_birth}}">{{$trainer->getFormatDate()}}</time>
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