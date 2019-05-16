
<section class="cta-training cta-training__background">
    <h2 aria-level="2" role="heading" class="title title__blue title__center">Ses prochains entrainements</h2>
    <div class="cta-training__container wrap">
        @if(!empty (count(($athlete->trainings))))
            @foreach($athlete->trainings->take(3) as $training)
                <div class="trainings__single cta-training__single">
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
                </div>
            @endforeach
        @else
            <p class="empty empty-center">L'athlète n'a actuellement aucun entrainement de prévu.</p>
        @endif
    </div>
    <div class="cta-training__button wrap">
        <a href="{{ route('entrainements') }}" class="button" title="Vers les entrainements">
            <span class="button-blue__left">Voir tous les entrainements</span>
            <i class="button-blue__right"></i>
        </a>
    </div>
</section>