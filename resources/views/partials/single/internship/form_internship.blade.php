<section class="single-stage__bloc-form wrap">
    <h2 aria-level="2" class="title title__blue title__center">Formulaire de préinscription</h2>
    {{ Form::open([ 'method' => 'POST', 'class' => 'single-stage__form', 'route' =>['mail-internship-form'], 'id' =>'formerror']) }}
    <div class="single-stage__form-container">
        <fieldset>
            <legend class="single-stage__form-legend">Tous les champs suivis d'un (*) sont obligatoires</legend>
            <div class="single-stage__form-bloc">
                <div class="floating-label">
                    <input class="single-stage__form-input" placeholder="Nom complet du parent *"
                           type="text" name="name" id="name" autocomplete="off"
                            value="{{ $internship->setValueInternshipForm('name') }}">
                    <label for="name" class="postComment__label {{ old('name') ? ' active' : '' }}">Nom complet du parent *</label>
                    @if($errors->has('name'))
                        <span class="form-error">{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="floating-label">
                    <input class="single-stage__form-input" placeholder="Votre email *"
                           type="email" name="email" id="email" autocomplete="off" required
                           value="{{ $internship->setValueInternshipForm('email') }}">
                    <label for="email" class="postComment__label {{ old('email') ? ' active' : '' }}">Votre email *</label>
                    @if($errors->has('email'))
                        <span class="form-error">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="single-stage__form-width">
                    <div class="floating-label floating-label__width">
                        <input class="single-stage__form-input" placeholder="Votre téléphone"
                               type="tel" name="phone" id="phone" autocomplete="off"
                               value="{{ $internship->setValueInternshipForm('phone') }}">
                        <label for="phone" class="postComment__label {{ old('phone') ? ' active' : '' }}">Votre téléphone</label>
                        @if($errors->has('phone'))
                            <span class="form-error">{{$errors->first('phone')}}</span>
                        @endif
                    </div>
                    <div class="floating-label floating-label__width">
                        <input class="single-stage__form-input" placeholder="Votre fax"
                               type="tel" name="fax" id="fax" autocomplete="off"
                               value="{{ $internship->setValueInternshipForm('fax') }}">
                        <label for="fax" class="postComment__label {{ old('fax') ? ' active' : '' }}">Votre fax</label>
                        @if($errors->has('fax'))
                            <span class="form-error">{{$errors->first('fax')}}</span>
                        @endif
                    </div>
                </div>
                <div class="single-stage__form-width">
                    <div class="floating-label floating-label__width">
                        <input class="single-stage__form-input" placeholder="Nombres d'enfants *"
                               type="number" name="childs" id="childs" autocomplete="off" required
                               value="{{ $internship->setValueInternshipForm('childs') }}">
                        <label for="childs" class="postComment__label {{ old('childs') ? ' active' : '' }}">Nombre d'enfants *</label>
                    </div>
                    <div class="floating-label floating-label__width">
                        <select name="affil" id="affil" class="single-stage__form-input" required
                                value="{{ $internship->setValueInternshipForm('affil') }}">
                            <option value="" selected disabled>Affilié (au moins 1)</option>
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                        <label for="affil" class="postComment__label {{ old('affil') ? ' active' : '' }}">Affilié (au moins 1)</label>
                        @if($errors->has('affil'))
                            <span class="form-error">{{$errors->first('affil')}}</span>
                        @endif
                    </div>
                </div>
                <div class="floating-label">
                    <select name="title" id="title" class="single-stage__form-input" required
                            value="{{ $internship->setValueInternshipForm('title') }}">
                        <option value="" selected disabled>Choix du stage</option>
                        @foreach($allStages as $stage)
                            <option value="{{$stage->title}}">{{$stage->title}}</option>
                        @endforeach
                    </select>
                    <label for="title" class="postComment__label {{ old('title') ? ' active' : '' }}">Choix du stage</label>
                    @if($errors->has('title'))
                        <span class="form-error">{{$errors->first('title')}}</span>
                    @endif
                </div>
                <div class="floating-label">
                <textarea class="single-stage__form-textarea" name="bodyMessage" id="bodyMessage" cols="30" rows="10"
                          placeholder="Éventuelles questions ?"  value="{{ $internship->setValueInternshipForm('bodyMessage') }}"></textarea>
                    <label for="bodyMessage" class="floating-label__label {{ old('bodyMessage') ? ' active' : '' }}">Éventuelles questions ?</label>
                    @if($errors->has('bodyMessage'))
                        <span class="form-error">{{$errors->first('bodyMessage')}}</span>
                    @endif
                </div>
                {!! NoCaptcha::display() !!}
                @if($errors->has('g-recaptcha-response'))
                    <span class="form-error">{{ $errors->first('g-recaptcha-response') }}</span>
                @endif
                <button type="submit" class="button" id="#internship">
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