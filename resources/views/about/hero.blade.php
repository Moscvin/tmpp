<section class="hero about-us padding-top-header">
    <div class="hero__background">
        @if($page->contexts->first()->isMediaTypeVideo())
            <video width="100%" height="100%" poster="{{ url('storage/' . $page->contexts->first()->media) }}"
                   defaultmuted="" muted="" playsinline="" loop="" autoplay="">
                <source type="video/webm" src="{{ url('storage/' . $page->contexts->first()->media) }}">
                <source src="{{ url('storage/' . $page->contexts->first()->media) }}"
                        type="video/mp4">
            </video>

        @else
            <img src="{{ url('storage/' . $page->contexts->first()->media) }}" alt="hero image">
        @endif
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-us__title about-us__desc">
                    {!! $page->getContextText('hero_sectiune') !!}
                </div>
            </div>
        </div>
    </div>
</section>
