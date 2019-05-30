<section class="single-stage__bloc-form wrap">
    <h2 aria-level="2" class="title title__blue title__center">Formulaire de préinscription</h2>
    {{ Form::open([ 'method' => 'POST', 'class' => 'single-stage__form', 'route' =>['mail-internship-form']]) }}
    <div class="single-stage__form-container">
        <fieldset>
            <legend class="single-stage__form-legend">Tous les champs suivis d'un (*) sont obligatoires</legend>
            <div class="single-stage__form-bloc">
                <div class="floating-label">
                    <input class="single-stage__form-input" placeholder="Nom complet du parent *"
                           type="text" name="name" id="name" autocomplete="off">
                    <label for="name">Nom complet du parent *</label>
                    @if($errors->has('name'))
                        <span class="form-error">{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="floating-label">
                    <input class="single-stage__form-input" placeholder="Votre email *"
                           type="email" name="email" id="email" autocomplete="off" required>
                    <label for="email">Votre email *</label>
                    @if($errors->has('email'))
                        <span class="form-error">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="single-stage__form-width">
                    <div class="floating-label floating-label__width">
                        <input class="single-stage__form-input" placeholder="Votre téléphone"
                               type="tel" name="phone" id="phone" autocomplete="off" required>
                        <label for="phone">Votre téléphone</label>
                        @if($errors->has('phone'))
                            <span class="form-error">{{$errors->first('phone')}}</span>
                        @endif
                    </div>
                    <div class="floating-label floating-label__width">
                        <input class="single-stage__form-input" placeholder="Votre fax"
                               type="tel" name="fax" id="fax" autocomplete="off">
                        <label for="fax">Votre fax</label>
                        @if($errors->has('fax'))
                            <span class="form-error">{{$errors->first('fax')}}</span>
                        @endif
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
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                        <label for="affil">Affilié</label>
                        @if($errors->has('affil'))
                            <span class="form-error">{{$errors->first('affil')}}</span>
                        @endif
                    </div>
                </div>
                <div class="floating-label">
                    <input class="single-stage__form-input" placeholder="Inscrivez le nom du stage*"
                           type="text" name="title" id="title" autocomplete="off" required>
                    <label for="title">Inscrivez le nom du stage *</label>
                    @if($errors->has('title'))
                        <span class="form-error">{{$errors->first('title')}}</span>
                    @endif
                </div>
                <div class="floating-label">
                <textarea class="single-stage__form-textarea" name="bodyMessage" id="bodyMessage" cols="30" rows="10"
                          required placeholder="Éventuelles questions ?"></textarea>
                    <label for="bodyMessage" class="floating-label__label">Éventuelles questions ?</label>
                    @if($errors->has('bodyMessage'))
                        <span class="form-error">{{$errors->first('bodyMessage')}}</span>
                    @endif
                </div>
                <button type="submit" class="button">
                    <span class="button-orange__left">Envoyez votre message</span>
                    <i class="button-orange__right-send"></i>
                </button>
                @if((session('success')))
                    <p class="form-success">{!! session('success') !!}</p>
                @else
                @endif
            </div>
        </fieldset>
    </div>
    {{ Form::close() }}
</section>