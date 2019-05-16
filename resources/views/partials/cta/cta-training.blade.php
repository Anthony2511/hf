
<section class="cta-training cta-training__background">
    <h2 aria-level="2" role="heading" class="title title__blue title__center">Ses prochains entrainements</h2>
    <div class="cta-training__container wrap">
        @foreach($athlete->trainings->take(3) as $training)
            <p>{{ $training->specifictraining }}</p>
        @endforeach
    </div>
    <div class="cta-training__button wrap">
        <a href="{{ route('entrainements') }}" class="button" title="Vers les entrainements">
            <span class="button-blue__left">Voir tous les entrainements</span>
            <i class="button-blue__right"></i>
        </a>
    </div>
</section>