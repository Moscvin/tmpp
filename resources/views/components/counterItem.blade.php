<li>
    <h3>
        <div data-max="{{ $counter->value }}">{{ $counter->value }}</div>

        @if($counter->unit)
            {{ $counter->unit }}
        @endif

        @if($counter->with_plus)
            <span>+</span>
        @endif

    </h3>
    <p>
        {{ $counter->name }}
    </p>
</li>
