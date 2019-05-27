<div class="athlete-trainer__container wrap">
    <h4 class="title title__blue title__center title-size" aria-level="4" role="heading">Ses athlètes</h4>
    <div class="athlete-trainer__bloc">
        @if(!empty (count($trainer->athletes)))
            @foreach($trainer->athletes as $athlete)
                <a href="{{url('athletes/' . $athlete['slug'])}}"
                   class="athlete-trainer__athlete-link">
                    <div class="athlete-trainer__athlete">
                        <figure class="athlete-trainer__athlete-figure">
                            <img src="{{ $athlete->getImageProfile('_preview.jpg') }}"
                                 alt="Photo de l'athlète : {{$athlete->fullname}}"
                                 width="30"
                                 height="30">
                        </figure>
                        <span class="athlete-trainer__athlete-name">{{$athlete->fullname}}</span>
                    </div>
                </a>
            @endforeach
        @else
            <p class="empty">Aucun athlète</p>
        @endif
    </div>
</div>