<div class="switcher">
    <form action="{{ route('athletes-filter') }}" method="get" class="switcher__form">
        <div class="switcher__container">
            <div class="switcher__bloc">
                <label for="discipline" class="switcher__label">Discipline(s)</label>
                <select name="discipline" id="discipline" class="switcher__select">
                    @foreach($disciplines as $discipline)
                        <option value="{{ $discipline->slug }}">{{ $discipline->specificdiscipline }}</option>
                    @endforeach
                </select>
            </div>
            <div class="switcher__bloc">
                <label for="division" class="switcher__label">Catégorie(s)</label>
                <select name="division" id="division" class="switcher__select">
                    @foreach($division as $division)
                        <option value="{{ $division->slug }}">{{ $division->specificdivision }}</option>
                    @endforeach
                </select>
            </div>
            <div class="switcher__bloc">
                <label for="status" class="switcher__label">Statut</label>
                <select name="status" id="status" class="switcher__select">
                    <option value="novice">Novice</option>
                    <option value="intermédiaire">Intermédiaire</option>
                    <option value="haut niveau">Haut Niveau</option>
                </select>
            </div>
        </div>
        <div>
            <button type="submit" class="button" title="Vers les stages">
                <span class="button-orange__left">Rechercher</span>
                <i class="button-orange__right"></i>
            </button>
        </div>
    </form>
</div>