<div class="contact-person wrap">
    <div class="contact-person__container" itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="name" content="Union Athlétique des Hautes Fagnes">
        <div class="contact-person__bloc" itemprop="alumni" itemscope itemtype="http://schema.org/Person">
            <figure class="contact-person__figure">
                <img src="../img/contact-verviers.jpg"
                     alt="Photo de présentation de Verviers"
                     width="600"
                     height="300"
                     itemprop="image">
            </figure>
            <h3 aria-level="3" class="contact-person__title">Verviers</h3>
            <ul class="contact-person__list">
                <li class="contact-person__item contact-person__item--place" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">{{ Config::get('settings.place_verviers') }}</li>
                <li class="contact-person__item contact-person__item--email"><a href="mailto:{{ Config::get('settings.email_verviers') }}" itemprop="email">{{ Config::get('settings.email_verviers') }}</a></li>
                <li class="contact-person__item contact-person__item--tel"><a href="tel:{{ Config::get('settings.phone_verviers') }}" itemprop="telephone">{{ Config::get('settings.phone_verviers') }}</a></li>
            </ul>
        </div>
        <div class="contact-person__bloc" itemprop="alumni" itemscope itemtype="http://schema.org/Person">
            <figure class="contact-person__figure">
                <img src="../img/contact-aywaille.jpg"
                     alt="Photo de présentation de Aywaille"
                     width="600"
                     height="300"
                     itemprop="image">
            </figure>
            <h3 aria-level="3" class="contact-person__title">Aywaille</h3>
            <ul class="contact-person__list">
                <li class="contact-person__item contact-person__item--place" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">{{ Config::get('settings.place_aywaille') }}</li>
                <li class="contact-person__item contact-person__item--email"><a href="mailto:{{ Config::get('settings.email_aywaille') }}" itemprop="email">{{ Config::get('settings.email_aywaille') }}</a></li>
                <li class="contact-person__item contact-person__item--tel"><a href="tel:{{ Config::get('settings.phone_aywaille') }}" itemprop="telephone">{{ Config::get('settings.phone_aywaille') }}</a></li>
            </ul>
        </div>
        <div class="contact-person__bloc" itemprop="alumni" itemscope itemtype="http://schema.org/Person">
            <figure class="contact-person__figure">
                <img src="../img/contact-stavelot.jpg"
                     alt="Photo de présentation de Stavelot"
                     width="600"
                     height="300"
                     itemprop="image">
            </figure>
            <h3 aria-level="3" class="contact-person__title">Stavelot</h3>
            <ul class="contact-person__list">
                <li class="contact-person__item contact-person__item--place" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">{{ Config::get('settings.place_stavelot') }}</li>
                <li class="contact-person__item contact-person__item--email"><a href="mailto:{{ Config::get('settings.email_stavelot') }}" itemprop="email">{{ Config::get('settings.email_stavelot') }}</a></li>
                <li class="contact-person__item contact-person__item--tel"><a href="tel:{{ Config::get('settings.phone_stavelot') }}" itemprop="telephone">{{ Config::get('settings.phone_stavelot') }}</a></li>
            </ul>
        </div>
        <div class="contact-person__bloc" itemprop="alumni" itemscope itemtype="http://schema.org/Person">
            <figure class="contact-person__figure">
                <img src="../img/contact-saintvith.jpg"
                     alt="Photo de présentation de Saint-Vith"
                     width="600"
                     height="300"
                     itemprop="image">
            </figure>
            <h3 aria-level="3" class="contact-person__title">Saint-Vith</h3>
            <ul class="contact-person__list">
                <li class="contact-person__item contact-person__item--place" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">{{ Config::get('settings.place_saintvith') }}</li>
                <li class="contact-person__item contact-person__item--email"><a href="mailto:{{ Config::get('settings.email_saintvith') }}" itemprop="email">{{ Config::get('settings.email_saintvith') }}</a></li>
                <li class="contact-person__item contact-person__item--tel"><a href="tel:{{ Config::get('settings.phone_saintvith') }}" itemprop="telephone">{{ Config::get('settings.phone_saintvith') }}</a></li>
            </ul>
        </div>
    </div>
</div>