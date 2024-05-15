<section class="hero padding-top-header">
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
                <div class="hero__title hero__content">
                    {!! $page->getContextText('hero_sectiune_1') !!}
                </div>
                <div class="hero__btn arrow-btn">
                    <a href="{{ route('services') }}">
                        {{ $vars['vezi_serviciile_noastre'] }}
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12.4976H19" stroke="black" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M12 5.49756L19 12.4976L12 19.4976" stroke="black" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
