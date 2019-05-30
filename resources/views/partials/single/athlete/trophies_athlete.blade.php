<section class="athlete-trophies wrap">
    <h3 class="title title__blue title__left title-size" aria-level="3">Ses palmarès</h3>
    <div class="athlete-trophies__container">
        @if(!empty (count($athlete->trophies)))
            @foreach($athlete->trophies as $trophie)
                <div class="athlete-trophies__bloc">
                    <time class="athlete-trophies__date" datetime="{{ $trophie->year }}">{{ $trophie->year }}</time>
                    - <span>{{ $trophie->name }}</span>
                </div>
            @endforeach
        @else
            <p class="empty">L'athlète n'a actuellement aucun trophée à son actif.</p>
        @endif
    </div>
</section>