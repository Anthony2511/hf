<section class="athlete-division wrap">
    <h4 class="title title__blue title__center title-size" aria-level="4" role="heading">Athlètes de la même division</h4>
    @foreach($athleteDivision as $athlete)
        <p>
            {{$athlete->firstname}}
        </p>
    @endforeach
</section>