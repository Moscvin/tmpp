@extends('layouts.app')

@section('content')

    <section class="services-hero hero padding-top-header">
        <div class="hero__background">
            <img src="{{ url('storage/' . $service->image) }}" alt="{{ $service->title }}">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="services-hero__title">
                        <h1>
                            {{ $service->title }}
                        </h1>
                    </div>
                    <div class="services-hero__desc">
                        <p>
                            {{ $service->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-detail">
        <div class="services__background">
            <img src="{{ asset('assets/img/grey-img-background2.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title">
                        <h2>
                            <span>{{ $vars['despre'] }}</span> {{ $vars['serviciu'] }}
                        </h2>
                    </div>
                    <div class="services-detail__content">
                        {!! $service->text !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-about services-detail__contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p>
                        <strong>Contactați-ne acum</strong> și venim cu cele mai bune soluții pentru securitatea
                        Dumneavoastră!
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="arrow-btn arrow-btn--black">
                        <a href="#">
                            cERE O CONSULTAȚIE
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 12H18.5" stroke="white" stroke-width="2" stroke-linecap="square"
                                      stroke-linejoin="round"/>
                                <path d="M12.5 5L19.5 12L12.5 19" stroke="white" stroke-width="2"
                                      stroke-linecap="square" stroke-linejoin="round"/>
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
