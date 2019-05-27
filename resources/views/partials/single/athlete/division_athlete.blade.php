<section class="athlete-trainer__container wrap">
    <h4 class="title title__blue title__center title-size" aria-level="4" role="heading">Athlètes de la même division</h4>
    <div class="athlete-trainer__bloc">
        @if(!empty (count($athleteDivision)))
            @foreach($athleteDivision->take(5) as $athlete)
                <a href="{{url('athletes/' . $athlete['slug'])}}"
                   class="athlete-trainer__athlete-link">
                    <div class="athlete-trainer__athlete">
                        <figure class="athlete-trainer__athlete-figure">
                            <img src="{{ $athlete->getImageProfile('_profile.jpg') }}"
                                 alt="Photo de l'athlète : {{$athlete->fullname}}"
                                 width="335"
                                 height="457">
                        </figure>
                        <span class="athlete-trainer__athlete-name">{{$athlete->fullname}}</span>
                    </div>
                </a>
            @endforeach
        @else
            <p class="empty">Aucun athlète</p>
        @endif
    </div>
</section>