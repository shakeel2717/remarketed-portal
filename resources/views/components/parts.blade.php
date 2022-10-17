<div class="col-lg-6 col-md-6 h-100">
    <div class="newpart">
        <h3 title="{{ $part->title }}">{{ str()->words($part->title, 5) }}</h3>
        <h4>$ {{ number_format($part->min_price, 2) }} - $ {{ number_format($part->max_price, 2) }}</h4>
        <h5 class="mb-2">Orderd: {{ $part->devices->count() }} Time</h5>
        <h5>{{ $part->stock - $part->devices->count() }} pieces left in stock <span>
                <a href="javascript:void(0);" wire:click="add({{ $part->id }},{{ $device->id }})">Add</a>
            </span>
        </h5>
        @foreach ($device->parts as $deviceParts)
            @if ($deviceParts->id == $part->id)
                <img src="/assets/img/icon20.svg" alt="icon" />
            @endif
        @endforeach
    </div>
</div>
