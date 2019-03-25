<p class="switcher__result">Résultat de la recherche : 3</p>
<div class="trainings">
    <div class="trainigs__container">
        <div class="trainings__bloc">
            @foreach($trainings as $training)
            <div class="trainings__single">
                <div class="trainings__intro">
                    <span class="trainings__day">{{ $training->day }}</span>
                    <span class="trainings__hour">{{$training->startHour}} - {{$training->endHour}}</span>
                </div>
                <div class="trainings__infos">
                    <span class="trainings__place">{{$training->place->name}}</span>
                    <span class="trainings__type trainings__type--sprint">{{$training->type->name}}</span>
                </div>
                <p class="trainings__text">
                    {{$training->content}}
                </p>
                <a href="#" class="trainings__trainers">
                    <figure class="trainings__figure">
                        <img src="../img/author.jpg"
                             srcset="../img/author.jpg 2x"
                             alt="Photo de l'entraineur"
                             width="30"
                             height="30">
                    </figure>
                    <span class="trainings__trainer-name">Jean Dupont</span>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>