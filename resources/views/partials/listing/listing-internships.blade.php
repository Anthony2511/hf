<p class="switcher__result">Résultat de la recherche : 3</p>
<div class="stage__container">
    @foreach($internships as $internship)
        <section class="stage__bloc">
            <h3 class="stage__title">{{$internship->title}}</h3>
            <div class="stage__date">
                <time datetime="{{$internship->getFormatStartDate()}}">{{$internship->getFormatStartDate()}}</time>
                -
                <time datetime="{{$internship->getFormatEndDate()}}">{{$internship->getFormatEndDate()}}</time>
            </div>
            <div class="stage__time">
                <time datetime="{{$internship->startHour}}">de {{ date("H", strtotime($internship->startHour)) }}h{{ date("i", strtotime($internship->startHour)) }}</time>
                <time datetime="{{$internship->endHour}}">à {{ date("H", strtotime($internship->endHour)) }}h{{ date("i", strtotime($internship->endHour)) }}</time>
            </div>
            <a href="{{url('stages/' . $internship->slug )}}" class="button-simple__size">En savoir plus</a>
            <a href="{{url('stages/' . $internship->slug )}}" class="stage__link"></a>
        </section>
    @endforeach
</div>