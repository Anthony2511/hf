<section class="athlete-trophies wrap">
    <h4 class="title title__blue title__left title-size" aria-level="4" role="heading">Ses palmarès</h4>
    <div class="athlete-trophies__container">
        @foreach($athlete->trophies as $trophie)
        <div class="athlete-trophies__bloc">
            <time class="athlete-trophies__date" datetime="{{ $trophie->year }}">{{ $trophie->year }}</time>
            - <span>{{ $trophie->name }}</span>
        </div>
        @endforeach
    </div>
</section>