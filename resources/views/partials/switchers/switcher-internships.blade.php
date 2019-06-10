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
                <label for="isFinish" class="switcher__label">Statut</label>
                <div class="switcher__select-box">
                    <select name="isFinish" id="isFinish" class="switcher__select">
                        <option <?php echo (Request::get('isFinish') == '') ? 'selected' : '';?> value="all">Tous</option>
                        <option <?php echo (Request::get('isFinish') == 'finish') ? 'selected' : '';?> value="finish">Terminée
                        </option>
                        <option
                            <?php echo (Request::get('isFinish') == 'not-finish') ? 'selected' : '';?> value="not-finish">Pas terminée
                        </option>
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
                <a href="{{route('stages')}}" class="switcher__reset" title="Reset la recherches">
                    <span class="hidden">Reset</span>
                </a>
            </div>
        </div>
    </form>
</div>