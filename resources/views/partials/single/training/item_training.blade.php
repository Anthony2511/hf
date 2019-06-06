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
            <span class="trainings__type {{$training->type->slug == 'sprint'? 'trainings__type--sprint' : ''}}
                                        {{$training->type->slug == 'epreuves-combinees'? 'trainings__type--sprint' : ''}}
                                        {{$training->type->slug == 'demi-fond'? 'trainings__type--sprint' : ''}}
                                        {{$training->type->slug == 'lancer'? 'trainings__type--lancer' : ''}}
                                        {{$training->type->slug == 'saut'? 'trainings__type--jump' : ''}}">{{$training->type->name}}</span>
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