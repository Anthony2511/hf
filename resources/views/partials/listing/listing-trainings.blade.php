<p class="switcher__result">Résultat de la recherche : {{$trainings->count()}}</p>
<div class="trainings">
    <div class="trainigs__container">
        <div class="trainings__bloc" id="container-ajax">
            @if($trainings->count() > 0)
                @foreach($trainings as $training)
                    <div class="trainings__single">
                        <div class="trainings__intro">
                            <span class="trainings__day">{{ substr($training->day,0,3) }}</span>
                            <span class="trainings__hour">
                                {{ date("H", strtotime($training->startHour)) }}
                                h {{ date("i", strtotime($training->startHour)) }}
                                -
                                {{ date("H", strtotime($training->endHour)) }}
                                h {{ date("i", strtotime($training->endHour)) }}</span>
                        </div>
                        <div class="trainings__infos">
                            <span class="trainings__place">{{$training->place->name}}</span>
                            <span class="trainings__type trainings__type--sprint">{{$training->type->name}}</span>
                        </div>
                        @if(!empty ($training->content))
                            <p class="trainings__text">
                                {{$training->content}}
                            </p>
                        @else
                            <p class="trainings__text">
                                Pas de contenu pour l'instant.
                            </p>
                        @endif
                        @if(!empty ($training->trainer))
                            <a href="{{url('entraineurs/' . $training->trainer['slug'] )}}" class="trainings__trainers">
                                <figure class="trainings__figure">
                                    <img src="{{ $training->trainer->getImageProfile('_preview.jpg') }}"
                                         srcset="{{ $training->trainer->getImageProfile('_preview.jpg') }}"
                                         alt="Photo de l'entraineur : {{ $training->trainer['fullname'] }}"
                                         width="30"
                                         height="30">
                                </figure>
                                <span class="trainings__trainer-name">{{$training->trainer['fullname']}}</span>
                            </a>
                        @else
                            <p class="empty-color">Aucune entraîneur</p>
                        @endif
                    </div>
                @endforeach
            @else
                <span class="empty">Il n'y pas d'entrainements correspondant à votre recherche</span>
            @endif
        </div>
    </div>
</div>
@if($trainings->count() >= 1)
    <noscript>
        {!! $trainings->render() !!}
    </noscript>
    <div class="load-more__container">
        <a href="{{ $trainings->nextPageUrl() . $getLoadMoreLink }}" class="load-more" id="load-more">
                <span class="load-more__label">
                    <span class="load-more__label-text">Charger plus de résultats</span>
                </span>
        </a>
    </div>
@endif