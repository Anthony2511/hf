<div class="single-stage">
    <section class="single-stage__container wrap">
        <h2 aria-level="2" role="heading" class="title title__blue title__center">{{$internship->title}}</h2>
        <div class="single-stage__date">
            <div class="single-stage__datetime">
                <time datetime="{{$internship->getFormatStartDate()}}">{{$internship->getFormatStartDate()}}</time>
                au
                <time datetime="{{$internship->getFormatEndDate()}}">{{$internship->getFormatEndDate()}}</time>
            </div>
            <div class="single-stage__datetime">
                <time datetime="{{$internship->startHour}}"><strong>de</strong> {{ date("H", strtotime($internship->startHour)) }}h{{ date("i", strtotime($internship->startHour)) }}</time>
                <time datetime="{{$internship->endHour}}"><strong>à</strong> {{ date("H", strtotime($internship->endHour)) }}h{{ date("i", strtotime($internship->endHour)) }}</time>
            </div>
        </div>
        <section class="single-stage__infos">
            <h3 aria-level="3" role="heading" class="title title__blue title__center title-size">Informations générales</h3>
            <p class="single-stage__content">
                {{$internship->content}}
            </p>
        </section>
    </section>
</div>