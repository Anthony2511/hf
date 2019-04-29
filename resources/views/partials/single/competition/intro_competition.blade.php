<div class="intro-competition">
    <h2 aria-level="2" role="heading" class="title title__blue title__center">{{ $competition->title }}</h2>
    <div class="intro-competition__container">
        <figure class="intro-competition__bloc-img" style="background-image: url('http://hf.test/img/image-compet.jpg')">
            <img src="../img/image-compet.jpg"
                 srcset="../img/image-compet.jpg 2x"
                 alt="Image d'introduction de la compétition"
                 width="614"
                 height="409"
                 class="hidden">
            <time datetime="" class="intro-competition__date">30 Novembre 2018</time>
        </figure>

        <div class="intro-competition__bloc wrap">
            <div class="intro-competition__bloc-text">
                <h3 class="title title__blue title__left title-size" aria-level="3" role="heading">Informations générales</h3>
                <div class="intro-competition__bloc-info">
                    <div class="intro-competition__info">
                        <span>Adresse</span>
                        <p class="intro-competition__info-content intro-competition__info-content--place">{{ $competition->place }}</p>
                    </div>
                    <div class="intro-competition__info">
                        <span>Type</span>
                        <p class="intro-competition__info-content intro-competition__info-content--type">Francophone Outdoor</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>