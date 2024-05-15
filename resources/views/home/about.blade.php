<section class="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12 d-flex align-items-center flex-column text-center">
                <div class="about__title about__content">
                    {!! $page->getContextText('despre_noi')!!}
                </div>
                <div class="about__btn arrow-btn arrow-btn--black">
                    <a href="{{ route('about') }}">
                        {{ $vars['afla_mai_multe'] }}
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M12 5L19 12L12 19" stroke="white" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
