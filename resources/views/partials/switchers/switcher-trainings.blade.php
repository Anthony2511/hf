<div class="switcher">
    <form action="{{ Request::url() }}" method="get" class="switcher__form">
        <div class="switcher__container">
            <div class="switcher__bloc">
                <label for="place" class="switcher__label">Lieux</label>
                <select name="place" id="place" class="switcher__select">
                    <option value="all">Tous</option>
                    @foreach($place as $place)
                        <option <?php echo (Request::get('place') == $place->slug) ? 'selected' : '' ;?> value="{{ $place->slug }}">{{ $place->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="switcher__bloc">
                <label for="division" class="switcher__label">Types</label>
                <select name="division" id="division" class="switcher__select">
                    <option value="all">Tous</option>
                    @foreach($type as $type)
                        <option <?php echo (Request::get('type') == $type->slug) ? 'selected' : '' ;?> value="{{ $type->slug }}">{{ $type->name }}</option>
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