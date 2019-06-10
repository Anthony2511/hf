<div class="switcher">
    <form action="{{ Request::url() }}" method="get" class="switcher__form">
        <div class="switcher__container">
            <div class="switcher__bloc">
                <label for="order" class="switcher__label">Date</label>
                <div class="switcher__select-box">
                    <select name="order" id="order" class="switcher__select">
                        <option <?php echo (Request::get('order') == 'DESC') ? 'selected' : '' ;?> value="DESC">Plus récent</option>
                        <option <?php echo (Request::get('order') == 'ASC') ? 'selected' : '' ;?> value="ASC">Moins récent</option>
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
                <a href="{{route('articles')}}" class="switcher__reset" title="Reset la recherches">
                    <span class="hidden">Reset</span>
                </a>
            </div>
        </div>
    </form>
</div>