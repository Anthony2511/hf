<div class="intro-competition">
    <h2 aria-level="2" role="heading" class="title title__blue title__center">{{ $competition->title }}</h2>
    <div class="intro-competition__container">
        <figure class="intro-competition__bloc-img" style="background-image: url('{{ $competition->getImageProfile('_profile.jpg') }}')">
            <img src="{{ $competition->getImageProfile('_profile.jpg') }}"
                 srcset="{{ $competition->getImageProfile('_profile.jpg') }} 2x"
                 alt="Image d'introduction de la compétition"
                 width="614"
                 height="409"
                 class="intro-competition__hidden">
            <time datetime="{{$competition->startDate}}" class="intro-competition__date">{{ $competition->getFullDate() }}</time>
        </figure>
        <div class="intro-competition__bloc wrap">
            <div class="intro-competition__bloc-text">
                <h3 class="athlete-intro__title-infos" aria-level="3">Informations générales</h3>
                <div class="intro-competition__bloc-info">
                    <div class="intro-competition__info">
                        <span>Adresse</span>
                        <p class="intro-competition__info-content intro-competition__info-content--place">{{ $competition->place }}</p>
                    </div>
                    <div class="intro-competition__info">
                        <span>Type</span>
                        <p class="intro-competition__info-content intro-competition__info-content--type">{{ $competition->type }}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>