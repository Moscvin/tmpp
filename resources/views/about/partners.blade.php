<section class="partners">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    {!! $page->getContextText('titlu_parteneri') !!}
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="partners__wrapper">
                    @foreach($partners as $partner)
                        <img src="{{ url('storage/' . $partner->image) }}" alt="{{ $partner->title }}">
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row mt-5 pt-4 d-flex justify-content-center">
            <div class="arrow-btn">
                <a href="{{ route('contact') }}">
                    {{$vars['devino_partener']}}
                </a>
            </div>
        </div>
    </div>
</section>
