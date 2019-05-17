<section class="article-comment wrap">
    <h2 class="title title__blue title__center" aria-level="2" role="heading">Les commentaires</h2>
    <div class="article-comment__container">
        @foreach($comments as $key => $comment)
            <div class="article-comment__author">
                <div class="article-comment__author-bloc">
                    <figure class="article-comment__author-figure">
                        <img src="../img/author.jpg"
                             srcset="../img/author.jpg 2x"
                             alt="Photo de l'auteur"
                             width="30"
                             height="30">
                    </figure>
                    <div class="article-comment__author-infos">
                        <span class="article-comment__author-name">{{$comment->user_name}}</span>
                        <time class="article-comment__date-author" datetime="{{$comment->created_at}}">{{$comment->getDate()}}</time>
                    </div>
                </div>
                <p class="article-comment__text">
                    {{$comment->content}}
                </p>
            </div>
        @endforeach

        <section class="postComment__section">

            <h3 role="heading" aria-level="3" class="postComment__title">Écrire un commentaire&nbsp;:</h3>

            {{ Form::open(['route' => ['comment.store', $article->id], 'method' => 'POST', 'class' => 'postComment', 'id' => 'comment']) }}

            <fieldset>
                <div>
                    <label for="user_name" class="postComment__label {{ old('user_name') ? ' active' : '' }}">Nom ou
                        pseudo</label>
                    <input type="text"
                           name="user_name"
                           id="user_name" class="postComment__input floatLabel" required
                           value="{{ $article->setValueCommentForm('user_name') }}">
                    <span class="form-error">{{ $errors->first('user_name') }}</span>
                </div>
                <div class="postComment__wrapper postComment__wrapper--2">
                    <label
                            for="email"
                            class="postComment__label {{ (old('email')) ? ' active' : '' }}">
                        Adresse email (ne sera pas publiée)
                    </label>

                    <input
                            type="email"
                            name="email"
                            id="email"
                            class="postComment__input floatLabel"
                            required
                            value="{{ $article->setValueCommentForm('email') }}"
                    >


                    <span class="form-error">
								{{ $errors->first('email') }}
							</span>
                </div>
            </fieldset>
            <div class="postComment__wrapperTextarea">
                <label for="content" class="postComment__label postComment__label--textarea">Commentaire&nbsp;:</label>
                <textarea style="display: block;" name="content" id="content" class="postComment__textarea" cols="30"
                          rows="10"
                          required>{{ old('content') }}</textarea>
                <span class="form-error">{{ $errors->first('content') }}</span>
            </div>
            <button class="postComment__submit">Poster le message</button>
            {{ Form::close() }}
            <p class="form-success">{!! session('success') !!}</p>
        </section>

    </div>
</section>