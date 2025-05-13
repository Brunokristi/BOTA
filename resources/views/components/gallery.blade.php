<section class="gallery section" data-theme="light">
    <div class="container">
        <div class="slider" id="slider">
            <div class="image">
                <img src="{{ asset('images/flowers.jpg') }}" alt="flowers" />
            </div>

            <div class="image">
                <img src="{{ asset('images/vegetables.jpg') }}" alt="tomato" />
            </div>

            <div class="image">
                <img src="{{ asset('images/gardener_1.jpg') }}" alt="hedge trimming" />
            </div>

            <div class="image">
                <img src="{{ asset('images/gardener_2.jpg') }}" alt="hedge trimming" />
            </div>

            <div class="image">
                <img src="{{ asset('images/gardener_3.jpg') }}" alt="hedge trimming" />
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