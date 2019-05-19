<div class="switcher">
    <form action="{{ Request::url() }}" method="get" class="switcher__form">
        <div class="switcher__container">
            <div class="switcher__bloc">
                <label for="discipline" class="switcher__label">Discipline(s)</label>
                <select name="discipline" id="discipline" class="switcher__select">
                    <option value="all">Toutes</option>
                    @foreach($disciplines as $discipline)
                        <option <?php echo (Request::get('discipline') == $discipline->slug) ? 'selected' : '' ;?> value="{{ $discipline->slug }}">{{ $discipline->specificdiscipline }}</option>
                    @endforeach
                </select>
            </div>
            <div class="switcher__bloc">
                <label for="division" class="switcher__label">Catégorie(s)</label>
                <select name="division" id="division" class="switcher__select">
                    <option value="all">Toutes</option>
                    @foreach($divisions as $division)
                        <option <?php echo (Request::get('division') == $division->slug) ? 'selected' : '' ;?> value="{{ $division->slug }}">{{ $division->specificdivision }}</option>
                    @endforeach
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