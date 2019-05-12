<section class="athlete-trophies wrap">
    <h4 class="title title__blue title__left title-size" aria-level="4" role="heading">Ses palmarès</h4>
    <div class="athlete-trophies__container">
        @if(!empty (count($trainer->trophies)))
            @foreach($trainer->trophies as $trophie)
                <div class="athlete-trophies__bloc">
                    <time class="athlete-trophies__date" datetime="{{ $trophie->year }}">{{ $trophie->year }}</time>
                    - <span>{{ $trophie->name }}</span>
                </div>
            @endforeach
        @else
            <p class="empty">L'entraîneur n'a actuellement aucun trophée à son actif.</p>
        @endif
    </div>
</section>