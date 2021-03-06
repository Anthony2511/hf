<section class="article-comment wrap">
    <h2 class="title title__blue title__center" aria-level="2">Les commentaires</h2>
    <div class="article-comment__container">
        @if($comments->count() > 0)
            <div class="article-comment__container-author">
                @foreach($comments as $key => $comment)
                    <div class="article-comment__author">
                        <div class="article-comment__author-bloc">
                            <figure class="article-comment__author-figure">
                                <img src="{{Gravatar::get($comment->email, 'small-secure')}}"
                                     srcset="{{Gravatar::get($comment->email, 'small-secure')}}"
                                     alt="Photo de l'auteur"
                                     width="30"
                                     height="30">
                            <div class="article-comment__author-infos">
                                <span class="article-comment__author-name">{{$comment->user_name}}</span>
                                <time class="article-comment__date-author"
                                      datetime="{{$comment->created_at}}">{{$comment->getDate()}}</time>
                            </div>
                        </div>
                        <p class="article-comment__text">
                            {{$comment->content}}
                        </p>
                    </div>
                @endforeach
            </div>
        @else
            <span class="empty empty-center">Aucun commentaire</span>
        @endif
        <section class="article-comment__section">
            <h3 role="heading" aria-level="3" class="article-comment__title-comment">Écrire un commentaire&nbsp;:</h3>
            {{ Form::open(['route' => ['comment.store', $article->id], 'method' => 'POST', 'class' => 'postComment', 'id' => 'comment']) }}
            <fieldset>
                <legend class="hidden">Formulaire pour écrire un commentaire</legend>
                <div class="single-stage__form-bloc">
                    <div class="floating-label">
                        <input type="text"
                               name="user_name"
                               placeholder="Nom ou pseudo*"
                               id="user_name" class="single-stage__form-input" required
                               value="{{ $article->setValueCommentForm('user_name') }}">
                        @if($errors->has('subject'))
                            <span class="form-error">{{ $errors->first('user_name') }}</span>
                        @endif
                        <label for="user_name" class="postComment__label {{ old('user_name') ? ' active' : '' }}">Nom ou
                            pseudo*</label>
                    </div>
                    <div class="floating-label">
                        <input type="email"
                               name="email"
                               placeholder="Adresse email (ne sera pas publiée)*"
                               id="email" class="single-stage__form-input" required
                               value="{{ $article->setValueCommentForm('email') }}">
                        @if($errors->has('email'))
                            <span class="form-error">{{ $errors->first('email') }}</span>
                        @endif
                        <label for="email" class="postComment__label {{ old('email') ? ' active' : '' }}">Adresse email
                            (ne sera pas publiée)*</label>
                    </div>
                    <div class="floating-label">
                        <textarea name="content"
                                  placeholder="Votre commentaire*"
                                  cols="30"
                                  rows="10"
                                  id="content" class="single-stage__form-textarea" required
                                  value="{{ $article->setValueCommentForm('email') }}"></textarea>
                        @if($errors->has('content'))
                            <span class="form-error">{{ $errors->first('content') }}</span>
                        @endif
                        <label for="content"
                               class="postComment__label {{ old('content') ? ' active' : '' }}">Votre
                            commentaire*</label>
                    </div>
                    {!! NoCaptcha::display() !!}
                    @if($errors->has('g-recaptcha-response'))
                        <span class="form-error">{{ $errors->first('g-recaptcha-response') }}</span>
                    @endif
                    <button type="submit" class="button">
                        <span class="button-orange__left">Poster le commentaire</span>
                        <i class="button-orange__right-send"></i>
                    </button>
                    @if((session('success')))
                        <p class="form-success">{!! session('success') !!}</p>
                    @else
                    @endif
                </div>
            </fieldset>
            {{ Form::close() }}
        </section>

    </div>
</section>