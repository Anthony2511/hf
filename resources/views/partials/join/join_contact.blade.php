<section class="single-stage__bloc-form wrap">
    <h2 aria-level="2" class="title title__blue title__center">Inscrivez-vous&hellip;</h2>
    {{ Form::open([ 'method' => 'POST', 'class' => 'single-stage__form', 'route' =>['mail-join-form']]) }}
    <div class="single-stage__form-container">
        <fieldset>
            <legend class="single-stage__form-legend">Tous les champs suivis d'un (*) sont obligatoires</legend>
            <div class="single-stage__form-bloc">
                <div class="single-stage__form-width">
                    <div class="floating-label floating-label__width">
                        <input class="single-stage__form-input" placeholder="Votre prénom *"
                               type="text" name="firstname" id="firstname" autocomplete="off" required>
                        <label for="firstname">Votre prénom *</label>
                        @if($errors->has('firstname'))
                            <span class="form-error">{{$errors->first('firstname')}}</span>
                        @endif
                    </div>
                    <div class="floating-label floating-label__width">
                        <input class="single-stage__form-input" placeholder="Votre nom *"
                               type="text" name="lastname" id="lastname" autocomplete="off" required>
                        <label for="lastname">Votre nom *</label>
                        @if($errors->has('lastname'))
                            <span class="form-error"> {{$errors->first('lastname')}}</span>
                        @endif
                    </div>
                </div>
                <div class="floating-label">
                    <input class="single-stage__form-input" placeholder="Votre email *"
                           type="text" name="email" id="email" autocomplete="off" required>
                    <label for="email">Votre email *</label>
                    @if($errors->has('email'))
                        <span class="form-error">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="single-stage__form-width">
                    <div class="floating-label floating-label__width">
                        <input class="single-stage__form-input" placeholder="Votre téléphone*"
                               type="text" name="phone" id="phone" autocomplete="off" required>
                        <label for="phone">Votre téléphone*</label>
                        @if($errors->has('phone'))
                            <span class="form-error">{{$errors->first('phone')}}</span>
                        @endif
                    </div>
                    <div class="floating-label floating-label__width">
                        <input class="single-stage__form-input"
                               type="date" name="date" id="date" autocomplete="off" required
                               value="1919-01-01"
                               min="1919-01-01" max="2015-01-01">
                        <label for="date">Votre date de naissance*</label>
                        @if($errors->has('date'))
                            <span class="form-error">{{$errors->first('date')}}</span>
                        @endif
                    </div>
                </div>
                <div class="floating-label">
                <textarea class="single-stage__form-textarea" name="bodyMessage" id="bodyMessage" cols="30" rows="10"
                          placeholder="Vos éventuelles questions ?"></textarea>
                    <label for="bodyMessage" class="floating-label__label">Vos éventuelles questions ? </label>
                    @if($errors->has('bodyMessage'))
                        <span class="form-error">{{$errors->first('bodyMessage')}}</span>
                    @endif
                </div>
                <button type="submit" class="button">
                    <span class="button-orange__left">Envoyez votre inscription</span>
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
