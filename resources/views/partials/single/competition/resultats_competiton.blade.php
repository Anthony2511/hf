<section class="resultats-competition wrap">
    <h2 class="title title__blue title__left title-size" aria-level="2">Résultats</h2>
    @if($competition->results !== null)
        <a href="{{ url('/') . '/uploads/' . $competition->results }}" class="resultats-competition__link" target="_blank">
            {{ $competition->text_results }}
        </a>
    @else
        <span class="empty empty-margin">Aucun résultat pour le moment</span>
    @endif
</section>