<div class="equipement__container">
    @foreach($amenities as $amenity)
        <div class="equipement__bloc">
            <figure class="equipement__figure">
                <span class="equipement__price">{{ $amenity->price }}</span>
                <h2 aria-level="2" role="heading" class="equipement__title">{{ $amenity->title }}</h2>
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
</div>