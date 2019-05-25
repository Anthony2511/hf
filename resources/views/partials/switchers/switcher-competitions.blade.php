<div class="switcher">
    <form action="{{ Request::url() }}" method="get" class="switcher__form">
        <div class="switcher__container">
            <div class="switcher__bloc">
                <label for="order" class="switcher__label">Date</label>
                <div class="switcher__select-box">
                    <select name="order" id="order" class="switcher__select">
                        <option <?php echo (Request::get('order') == 'ASC') ? 'selected' : '' ;?> value="ASC">Plus récent</option>
                        <option <?php echo (Request::get('order') == 'DESC') ? 'selected' : '' ;?> value="DESC">Moins récent</option>
                    </select>
                </div>
            </div>
            <div class="switcher__bloc">
                <label for="type" class="switcher__label">Type</label>
                <div class="switcher__select-box">
                    <select name="type" id="type" class="switcher__select">
                        <option <?php echo (Request::get('type') == '') ? 'selected' : '' ;?> value="all">Tous</option>
                        <option <?php echo (Request::get('type') == 'provincial-outdoor') ? 'selected' : '' ;?> value="provincial-outdoor">Provincial Outdoor</option>
                        <option <?php echo (Request::get('type') == 'provincial-indoor') ? 'selected' : '' ;?> value="provincial-indoor">Provincial Indoor</option>
                        <option <?php echo (Request::get('type') == 'francophone-outdoor') ? 'selected' : '' ;?>  value="francophone-outdoor">Francophone Outdoor</option>
                        <option <?php echo (Request::get('type') == 'francophone-indoor') ? 'selected' : '' ;?>  value="francophone-indoor">Francophone Indoor</option>
                        <option <?php echo (Request::get('type') == 'national-outdoor') ? 'selected' : '' ;?>  value="national-outdoor">National Outdoor</option>
                        <option <?php echo (Request::get('type') == 'national-indoor') ? 'selected' : '' ;?>  value="national-indoor">National Indoor</option>
                        <option <?php echo (Request::get('type') == 'international-outdoor') ? 'selected' : '' ;?>  value="international-outdoor">International Outdoor</option>
                        <option <?php echo (Request::get('type') == 'international-indoor') ? 'selected' : '' ;?>  value="international-indoor">International Indoor</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="switcher__button">
            <button type="submit" class="button" title="Vers les stages">
                <span class="button-orange__left">Rechercher</span>
                <i class="button-orange__right"></i>
            </button>
        </div>
    </form>
</div>