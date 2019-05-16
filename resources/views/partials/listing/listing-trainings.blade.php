<p class="switcher__result">Résultat de la recherche : 3</p>
<div class="trainings">
    <div class="trainigs__container">
        <div class="trainings__bloc">
            @foreach($trainings as $training)
                <div class="trainings__single">
                    <div class="trainings__intro">
                        <span class="trainings__day">{{ $training->day }}</span>
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
                                <img src="./img/author.jpg"
                                     srcset="../img/author.jpg 2x"
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
        </div>
    </div>
</div>