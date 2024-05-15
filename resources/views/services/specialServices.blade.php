<section class="services-specials">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title description">
                    {!! $page->getContextText('special_services') !!}
                </div>
            </div>
        </div>
        <div class="row mt-5 services__wrapper">
            @foreach($specialServices as $specialService)
                <div class="col-lg-3 col-sm-6">
                    @include('components.serviceItem', ['service' => $specialService])
                </div>
            @endforeach
        </div>
    </div>
</section>
