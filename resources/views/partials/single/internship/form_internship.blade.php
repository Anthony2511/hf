<section class="single-stage__bloc-form wrap">
    <h2 aria-level="2" role="heading" class="title title__blue title__center">Formulaire de préinscription</h2>
    {{ Form::open([ 'method' => 'POST', 'class' => 'single-stage__form']) }}
    <div class="single-stage__form-container">
        <legend class="single-stage__form-legend">Tous les champs suivis d'un (*) sont obligatoires</legend>
        <div class="single-stage__form-bloc">
            <div class="floating-label">
                <input class="single-stage__form-input" placeholder="Nom complet du parent *"
                       type="text" name="name" id="name" autocomplete="off">
                <label for="name">Nom complet du parent *</label>
            </div>
            <div class="floating-label">
                <input class="single-stage__form-input" placeholder="Votre email *"
                       type="text" name="email" id="email" autocomplete="off">
                <label for="email">Votre email *</label>
            </div>
        </div>
    </div>
    {{ Form::close() }}
</section>