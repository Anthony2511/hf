<div class="switcher">
    <form action="{{ Request::url() }}" method="get" class="switcher__form">
        <div class="switcher__container">
            <div class="switcher__bloc">
                <label for="order" class="switcher__label">Date</label>
                <select name="order" id="order" class="switcher__select">
                    <option <?php echo (Request::get('order') == 'ASC') ? 'selected' : '' ;?> value="ASC">Plus récent</option>
                    <option <?php echo (Request::get('order') == 'DESC') ? 'selected' : '' ;?> value="DESC">Moins récent</option>
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