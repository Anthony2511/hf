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
            <h3 aria-level="3" role="heading" class="contact-person__title">Verviers</h3>
            <ul class="contact-person__list">
                <li class="contact-person__item contact-person__item--place" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">{{ $page->contact_verviersPlace }}</li>
                <li class="contact-person__item contact-person__item--email"><a href="mailto:{{ $page->contact_verviersEmail }}" itemprop="email">{{ $page->contact_verviersEmail }}</a></li>
                <li class="contact-person__item contact-person__item--tel" itemprop="telephone">{{ $page->contact_verviersPhone }}</li>
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
            <h3 aria-level="3" role="heading" class="contact-person__title">Aywaille</h3>
            <ul class="contact-person__list">
                <li class="contact-person__item contact-person__item--place" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">{{ $page->contact_aywaillePlace }}</li>
                <li class="contact-person__item contact-person__item--email"><a href="mailto:{{ $page->contact_aywailleEmail }}" itemprop="email">{{ $page->contact_aywailleEmail }}</a></li>
                <li class="contact-person__item contact-person__item--tel" itemprop="telephone">{{ $page->contact_aywaillePhone }}</li>
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
            <h3 aria-level="3" role="heading" class="contact-person__title">Stavelot</h3>
            <ul class="contact-person__list">
                <li class="contact-person__item contact-person__item--place" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">{{ $page->contact_stavelotPlace }}</li>
                <li class="contact-person__item contact-person__item--email"><a href="mailto:{{ $page->contact_stavelotEmail }}" itemprop="email">{{ $page->contact_stavelotEmail }}</a></li>
                <li class="contact-person__item contact-person__item--tel" itemprop="telephone">{{ $page->contact_stavelotPhone }}</li>
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
            <h3 aria-level="3" role="heading" class="contact-person__title">Saint-Vith</h3>
            <ul class="contact-person__list">
                <li class="contact-person__item contact-person__item--place" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">{{ $page->contact_saintvithPlace }}</li>
                <li class="contact-person__item contact-person__item--email"><a href="mailto:{{ $page->contact_saintvithEmail }}" itemprop="email">{{ $page->contact_saintvithEmail }}</a></li>
                <li class="contact-person__item contact-person__item--tel" itemprop="telephone">{{ $page->contact_saintvithPhone }}</li>
            </ul>
        </div>
    </div>
</div>