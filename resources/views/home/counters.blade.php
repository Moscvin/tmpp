<section class="counters">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="title">
                    <h2>
                        <span>{{ $vars['library'] }}</span> {{ $vars['in_cifre'] }}
                    </h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="counters__metrics">
                    <ul>
                        @foreach($counters->take(4) as $counter)
                            <x-counterItem :counter="$counter"/>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
