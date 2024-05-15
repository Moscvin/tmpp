<section class="services-page padding-top-header">
    <div class="services__background">
        <img src="{{ asset('assets/img/grey-img-background2.jpg') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title description">
                    {!! $page->getContextText('serviciile_noastre') !!}
                </div>
            </div>
        </div>
        <div class="row mt-5 services__wrapper">
            @foreach($services as $service)
                <div class="col-lg-3 col-sm-6">
                    @include('components.serviceItem', ['service' => $service])
                </div>
            @endforeach
        </div>
    </div>
</section>
