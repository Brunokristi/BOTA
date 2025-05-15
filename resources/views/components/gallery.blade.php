<section class="gallery section" data-theme="light">
    <div class="container">
        <div class="slider" id="slider">
            <div class="image">
                <img src="{{ asset('images/flowers.jpg') }}" alt="Kvitnúca záhrada plná farebných kvetov" />
            </div>

            <div class="image">
                <img src="{{ asset('images/wild.jpg') }}" alt="Divoká prírodná záhrada s trávami a kvetmi" />
            </div>

            <div class="image">
                <img src="{{ asset('images/about_1.jpg') }}" alt="Záhradník pracujúci na upratovaní a údržbe zelene" />
            </div>

            <div class="image">
                <img src="{{ asset('images/vegetables.jpg') }}" alt="Zeleninová záhrada s čerstvými paradajkami" />
            </div>

            <div class="image">
                <img src="{{ asset('images/romantic.jpg') }}" alt="Romantická záhrada s kvetmi a chodníčkom" />
            </div>

            <div class="image">
                <img src="{{ asset('images/rustic.jpg') }}" alt="Vidiecka rustikálna záhrada s drevenými prvkami" />
            </div>

            <div class="image">
                <img src="{{ asset('images/atrium.jpg') }}" alt="Moderné záhradné átrium v interiéri alebo dvore" />
            </div>

            <div class="image">
                <img src="{{ asset('images/office.jpg') }}" alt="Zeleň a kvety v kancelárskom priestore" />
            </div>

            <div class="image">
                <img src="{{ asset('images/about_2.jpg') }}" alt="Záhradníci pri práci s náradím na úpravu kríkov" />
            </div>
        </div>

        <div class="slider-controls">
            <button class="button" onclick="moveSlide(-1)">
                <i class="bi bi-arrow-left"></i>
            </button>
            <button class="button" onclick="moveSlide(1)">
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>
    </div>
</section>
