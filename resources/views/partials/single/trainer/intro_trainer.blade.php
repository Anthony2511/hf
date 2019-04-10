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
                <h3 aria-level="3" role="heading" class="athlete-intro__name">{{$trainer->firstname}}
                    <span>{{$trainer->lastname}}</span></h3>
                <span class="athlete-intro__division">{{$trainer->status}}</span>
            </section>
            <section class="athlete-intro__info">
                <h4 class="title title__blue title__left title-size" aria-level="4" role="heading">Informations
                    générales</h4>
                <div class="athlete-intro__content-bloc">
                    <div class="athlete-intro__content">
                        <span class="athlete-intro__content-title">Discipline(s)</span>
                        <div class="athlete-intro__bloc-discipline">
                            @foreach($trainer->disciplines as $discipline)
                                <span class="athlete-intro__content-text athlete-intro__content-text--discipline">{{$discipline->name}} {{ucfirst(substr($discipline->gender,-6,1))}}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="athlete-intro__content">
                        <span class="athlete-intro__content-title">Date de naissance</span>
                        <datetime class="athlete-intro__content-text"
                                  time="{{$trainer->getFormatDate()}}">{{$trainer->getFormatDate()}}</datetime>
                    </div>
                    <div class="athlete-intro__content">
                        <span class="athlete-intro__content-title">Catégorie(s)</span>
                        @foreach($trainer->divisions as $division)
                            <span class="athlete-intro__content-text">{{$division->name}}</span>
                        @endforeach
                    </div>
                    <div class="athlete-intro__content">
                        <span class="athlete-intro__content-title">Athlète(s)</span>
                        @foreach($trainer->athletes as $athlete)
                            <a href="{{url('athletes/' . $athlete['slug'])}}" class="athlete-intro__trainer-link">
                                <div class="athlete-intro__trainer">
                                    <figure class="athlete-intro__trainer-figure">
                                        <img src="{{ $athlete->getImageProfile('_preview.jpg') }}"
                                             alt="Photo de l'athlète : {{$athlete->fullname}}"
                                             width="30"
                                             height="30">
                                    </figure>
                                    <span class="athlete-intro__content-text">{{$athlete->fullname}}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>