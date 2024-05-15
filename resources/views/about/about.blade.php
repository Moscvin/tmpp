<section class="services-about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="title description">
                    {!! $page->getContextText('titlu_descriere_despre') !!}
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="services-about__wrapper">
                    <div class="services-about__item">
                        <div class="services-about__number">
                            <h5>
                                1
                            </h5>
                        </div>
                        <div class="services-about__desc">
                            {!! $page->getContextText('sectiunea_about_text_1') !!}
                        </div>
                    </div>
                    <div class="services-about__item">
                        <div class="services-about__number">
                            <h5>
                                2
                            </h5>
                        </div>
                        <div class="services-about__desc">
                            {!! $page->getContextText('sectiunea_about_text_2') !!}
                        </div>
                    </div>
                    <div class="services-about__item">
                        <div class="services-about__number">
                            <h5>
                                3
                            </h5>
                        </div>
                        <div class="services-about__desc">
                            {!! $page->getContextText('sectiunea_about_text_3') !!}
                        </div>
                    </div>
                    <div class="services-about__item">
                        <div class="services-about__number">
                            <h5>
                                4
                            </h5>
                        </div>
                        <div class="services-about__desc">
                            {!! $page->getContextText('sectiunea_about_text_4') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="arrow-btn arrow-btn--black">
                    <a href="{{ route('contact') }}">
                        {{ $vars['ia_legatura_cu_noi'] }}
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 12H18.5" stroke="white" stroke-width="2" stroke-linecap="square"
                                stroke-linejoin="round" />
                            <path d="M12.5 5L19.5 12L12.5 19" stroke="white" stroke-width="2" stroke-linecap="square"
                                stroke-linejoin="round" />
                        </svg>

                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
