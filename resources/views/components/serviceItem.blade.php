<div class="services__item">
    <div class="services__image">
        <img src="{{ url('storage/' . $service->image) }}" alt="{{ $service->title }}">
    </div>
    <a href="{{ route('service', $service) }}" class="services__content">
        <div class="services__title">
            <h3>
                {{ $service->title }}
            </h3>
        </div>
        <div class="services__desc">
            <p>
                {{ $service->description }}
            </p>
            <div class="services__more">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 12H19" stroke="black" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 5L19 12L12 19" stroke="black" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    </a>
</div>
