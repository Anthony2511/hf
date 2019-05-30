@foreach($internships as $internship)
    <section class="stage__bloc">
        <h3 class="stage__title" aria-level="3">{{$internship->title}}</h3>
        <div class="stage__date">
            <time datetime="{{$internship->startDay}}">{{$internship->getFormatStartDate()}}</time>
            -
            <time datetime="{{$internship->endDay}}">{{$internship->getFormatEndDate()}}</time>
        </div>
        <div class="stage__time">
            <time datetime="{{$internship->startHour}}">de {{ date("H", strtotime($internship->startHour)) }}h{{ date("i", strtotime($internship->startHour)) }}</time>
            <time datetime="{{$internship->endHour}}">à {{ date("H", strtotime($internship->endHour)) }}h{{ date("i", strtotime($internship->endHour)) }}</time>
        </div>
        <a href="{{url('stages/' . $internship->slug )}}" class="button-simple__size" title="Vers la page du stage : {{ $internship->title }}">En savoir plus</a>
        <a href="{{url('stages/' . $internship->slug )}}" class="stage__link" title="Vers la page du stage : {{ $internship->title }}"><span class="hidden">Vers la page du stage : {{ $internship->title }}</span></a>
    </section>
@endforeach