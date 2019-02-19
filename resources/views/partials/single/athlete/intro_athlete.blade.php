<div class="athlete__container">
    <figure class="athlete__figure">
        <img src="{{ $athlete->getImageProfile('_profile.jpg') }}"
             srcset="{{ $athlete->getImageProfile('_profile.jpg') }} 2x"
             alt="Image de l'athlète : {{$athlete->firstname}} {{$athlete->lastname}}"
             width="335"
             height="457">
    </figure>
    <div class="athlete__bloc">
        <section class="athlete__title">
            <h3 aria-level="3" role="heading" class="athlete__name">{{$athlete->firstname}}<span>{{$athlete->lastname}}</span></h3>
            <span>Senior</span>
        </section>
        <section class="athlete__info">
            <h4 aria-level="4" role="heading">Informations générales</h4>
            <div class="athlete__content-bloc">
                <div class="athlete__content">
                    <span>Discipline(s)</span>
                    <span>1500m, 5000m</span>
                </div>
                <div class="athlete__content">
                    <span>Date de naissance</span>
                    <datetime time="{{$athlete->date_of_birth}}">{{$athlete->date_of_birth}}</datetime>
                </div>
                <div class="athlete__content">
                    <span>Statut</span>
                    <span>{{$athlete->status}}</span>
                </div>
                <div class="athlete__content">
                    <span>Profession</span>
                    <span>Sportif sous contrat</span>
                </div>
                <div class="athlete__content">
                    <span>Entraîneur</span>
                    <span>Jean Dupont</span>
                </div>
            </div>
        </section>
    </div>
</div>