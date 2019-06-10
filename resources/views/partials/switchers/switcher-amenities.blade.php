<div class="switcher">
    <form action="{{ Request::url() }}" method="get" class="switcher__form">
        <div class="switcher__container">
            <div class="switcher__bloc">
                <label for="order" class="switcher__label">Prix</label>
                <div class="switcher__select-box">
                    <select name="order" id="order" class="switcher__select">
                        <option <?php echo (Request::get('order') == 'ASC') ? 'selected' : '' ;?> value="ASC">Croissant</option>
                        <option <?php echo (Request::get('order') == 'DESC') ? 'selected' : '' ;?> value="DESC">Décroissant</option>
                    </select>
                </div>
            </div>
            <div class="switcher__bloc">
                <label for="size" class="switcher__label">Taille(s)</label>
                <div class="switcher__select-box">
                    <select name="size" id="size" class="switcher__select">
                        <option value="all">Toutes</option>
                        @foreach($sizes as $size)
                            <option <?php echo (Request::get('size') == $size->slug) ? 'selected' : '' ;?> value="{{ $size->slug }}">{{ $size->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="switcher__bloc">
                <label for="sexe" class="switcher__label">Sexe</label>
                <div class="switcher__select-box">
                    <select name="sexe" id="sexe" class="switcher__select">
                        <option <?php echo (Request::get('sexe') == '') ? 'selected' : '' ;?> value="all">Tous</option>
                        <option <?php echo (Request::get('sexe') == 'hommes') ? 'selected' : '' ;?> value="hommes">Hommes</option>
                        <option <?php echo (Request::get('sexe') == 'femmes') ? 'selected' : '' ;?> value="femmes">Femmes</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="switcher__bloc-button">
            <div class="switcher__button">
                <button type="submit" class="button" title="Vers les stages">
                    <span class="button-orange__left">Rechercher</span>
                    <i class="button-orange__right"></i>
                </button>
            </div>
            <div class="switcher__button">
                <a href="{{route('equipements')}}" class="switcher__reset" title="Reset la recherches">
                    <span class="hidden">Reset</span>
                </a>
            </div>
        </div>
    </form>
</div>