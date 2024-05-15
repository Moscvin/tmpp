<section class="services">
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
                    <x-serviceItem :service="$service"/>
                </div>
            @endforeach
        </div>
    </div>
</section>
