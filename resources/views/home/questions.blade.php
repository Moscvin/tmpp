<section class="questions">
    <div class="container">
        <div class="row">
            <div class="title">
                {!! $page->getContextText('sectiunea_intrebari')!!}
            </div>
        </div>
        <div class="row mt-5 pt-4 justify-content-center">
            <div class="col-lg-8 d-flex flex-column align-items-center">
                <div class="questions__wrapper">
                    @foreach($questions as $question)
                        <div class="questions__item">
                            <div class="questions__head">
                                <h3>
                                    {{ $question->question }}
                                </h3>
                                <div class="questions__icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="black" stroke-width="2"
                                              stroke-linecap="square" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="questions__body">
                                <p>
                                    {{ $question->answer }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="arrow-btn">
                    <a href="{{ route('contact') }}">
                        {{ $vars['ai_o_intrebare'] }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
