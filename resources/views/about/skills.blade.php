<section class="about-us-skills">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="about-us-history__content">
                    {!! $page->getContextText('sectiune_skiluri') !!}
                </div>
            </div>
            <div class="col-lg-10">
                <div class="about-us-skills__metrics">
                    <div class="about-us-skills__item">
                        <div class="circle">
                            <div class="circle__inside">
                                @settings('percentage.security')%
                            </div>
                            <div class="circle__filled"></div>
                            <div class="circle__to-fill">
                                <svg class="round" viewbox="0 0 100 100" width="200" height="200"
                                     data-percent="@settings('percentage.security')">
                                    <circle cx="50" cy="50" r="49"/>
                                </svg>
                            </div>
                        </div>
                        <div class="about-us-skills__text">
                            <p>
                                {{ $vars['servicii_de_învățare'] }}
                            </p>
                        </div>
                    </div>
                    <div class="about-us-skills__item">
                        <div class="circle">
                            <div class="circle__inside">
                                @settings('percentage.legal_entities')%
                            </div>
                            <div class="circle__filled"></div>
                            <div class="circle__to-fill">
                                <svg class="round" viewbox="0 0 100 100" width="200" height="200"
                                     data-percent="@settings('percentage.legal_entities')">
                                    <circle cx="50" cy="50" r="49"/>
                                </svg>
                            </div>
                        </div>
                        <div class="about-us-skills__text">
                            <p>
                                {{ $vars['persoane_educationale'] }}
                            </p>
                        </div>
                    </div>
                    <div class="about-us-skills__item">
                        <div class="circle">
                            <div class="circle__inside">
                                @settings('percentage.individuals')%
                            </div>
                            <div class="circle__filled"></div>
                            <div class="circle__to-fill">
                                <svg class="round" viewbox="0 0 100 100" width="200" height="200"
                                     data-percent="@settings('percentage.individuals')">
                                    <circle cx="50" cy="50" r="49"/>
                                </svg>
                            </div>
                        </div>
                        <div class="about-us-skills__text">
                            <p>
                                {{$vars['persoane_fizice']}}
                            </p>
                        </div>
                    </div>
                    <div class="about-us-skills__item">
                        <div class="circle">
                            <div class="circle__inside">
                                @settings('percentage.org-de-stat')%
                            </div>
                            <div class="circle__filled"></div>
                            <div class="circle__to-fill">
                                <svg class="round" viewbox="0 0 100 100" width="200" height="200"
                                     data-percent="@settings('percentage.org-de-stat')">
                                    <circle cx="50" cy="50" r="49"/>
                                </svg>
                            </div>
                        </div>
                        <div class="about-us-skills__text">
                            <p>
                                {{ $vars['organizatii_de_stat'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="arrow-btn">
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
