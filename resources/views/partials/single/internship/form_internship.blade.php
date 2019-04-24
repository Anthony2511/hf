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
                       type="text" name="email" id="email" autocomplete="off" required>
                <label for="email">Votre email *</label>
            </div>
            <div class="single-stage__form-width">
                <div class="floating-label floating-label__width">
                    <input class="single-stage__form-input" placeholder="Votre téléphone"
                           type="tel" name="phone" id="phone" autocomplete="off" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                    <label for="phone">Votre téléphone</label>
                </div>
                <div class="floating-label floating-label__width">
                    <input class="single-stage__form-input" placeholder="Votre fax"
                           type="tel" name="fax" id="fax" autocomplete="off" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                    <label for="fax">Votre fax</label>
                </div>
            </div>
            <div class="single-stage__form-width">
                <div class="floating-label floating-label__width">
                    <input class="single-stage__form-input" placeholder="Nombres d'enfants *"
                           type="number" name="childs" id="childs" autocomplete="off" required>
                    <label for="childs">Nombre d'enfants *</label>
                </div>
                <div class="floating-label floating-label__width">
                    <select name="affil" id="affil" class="single-stage__form-input" required>
                        <option value="" selected disabled>Affilié</option>
                        <option value="0">Oui</option>
                        <option value="1">Non</option>
                    </select>
                    <label for="fax">Affilié</label>
                </div>
            </div>
            <div class="floating-label">
                <textarea class="single-stage__form-textarea" name="message" id="message" cols="30" rows="10"
                          required placeholder="Votre message *"></textarea>
                <label for="email" class="floating-label__label">Votre message *</label>
            </div>
            <button type="submit" class="button">
                <span class="button-orange__left">Envoyez votre message</span>
                <i class="button-orange__right-send"></i>
            </button>
        </div>

    </div>
    {{ Form::close() }}
</section>