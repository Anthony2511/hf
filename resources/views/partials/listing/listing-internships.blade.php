<p class="switcher__result">Résultat de la recherche : 3</p>
<div class="stage__container">
    @foreach($internships as $internship)
        <section class="stage__bloc">
            <h3 class="stage__title">{{$internship->title}}</h3>
            <div class="stage__date">
                <time datetime="">{{$internship->startDay}}</time>
                -
                <time datetime="">{{$internship->endDay}}</time>
            </div>
            <div class="stage__time">
                <time datetime="">de {{$internship->startHour}}</time>
                <time>à {{$internship->endHour}}</time>
            </div>
            <a href="#" class="button-simple__size">En savoir plus</a>
            <a href="#" class="stage__link"></a>
        </section>
    @endforeach
</div>