<div class="switcher">
    <form action="{{ Request::url() }}" method="get" class="switcher__form">
        <div class="switcher__container">
            <div class="switcher__bloc">
                <label for="place" class="switcher__label">Lieux</label>
                <div class="switcher__select-box">
                    <select name="place" id="place" class="switcher__select">
                        <option value="all">Tous</option>
                        @foreach($place as $place)
                            <option <?php echo (Request::get('place') == $place->slug) ? 'selected' : '' ;?> value="{{ $place->slug }}">{{ $place->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="switcher__bloc">
                <label for="type" class="switcher__label">Types</label>
                <div class="switcher__select-box">
                    <select name="type" id="type" class="switcher__select">
                        <option value="all">Tous</option>
                        @foreach($type as $type)
                            <option <?php echo (Request::get('type') == $type->slug) ? 'selected' : '' ;?> value="{{ $type->slug }}">{{ $type->name }}</option>
                        @endforeach
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
                <a href="{{route('entrainements')}}" class="switcher__reset" title="Reset la recherches">
                    <span class="hidden">Reset</span>
                </a>
            </div>
        </div>
    </form>
</div>