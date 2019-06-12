<p class="switcher__result">Résultat de la recherche : {{$amenities->total()}}</p>
<div class="equipement__container" id="container-ajax">
    @if($amenities->count() > 0)
        @foreach($amenities as $amenity)
            <div class="equipement__bloc">
                <figure class="equipement__figure">
                    <span class="equipement__price">{{ $amenity->price }}</span>
                    <h2 aria-level="2" class="equipement__title">{{ $amenity->title }}</h2>
                    <div class="equipement__size">
                        @foreach($amenity->sizes as $size)
                            <span>
                            {{$size->name}}
                        </span>
                        @endforeach
                    </div>
                    <img src="{{ $amenity->getImageEquipment('_profile.jpg') }}"
                         srcset="{{ $amenity->getImageEquipment('_profile.jpg') }}"
                         alt="Photo de l'équipement : {{ $amenity->title }}"
                         width="335"
                         height="457">
                </figure>
            </div>
        @endforeach
    @else
        <span class="empty">Il n'y pas d'équipements correspondant à votre recherche</span>
    @endif
</div>
@if($amenities->count() >= 1)
    <noscript>
        {!! $amenities->render() !!}
    </noscript>
    <div class="load-more__container">
        <a href="{{ $amenities->nextPageUrl() . $getLoadMoreLink }}" class="load-more" id="load-more">
                <span class="load-more__label">
                    <span class="load-more__label-text">Charger plus de résultats</span>
                </span>
        </a>
    </div>
@endif