<div class="col-lg-6 col-md-6 h-100">
    <div class="newpart">
        <h3 title="{{ $part->title }}">{{ str()->words($part->title,5) }}</h3>
        <h4>$ {{ number_format($part->min_price,2) }} - $ {{ number_format($part->max_price,2)  }}</h4>
        <h5 class="mb-2">Orderd: {{ $part->devices->count() }} Time</h5>
        <h5>{{ $part->stock }} pieces left in stock <span>
                @if ($part->devices->count() > 0)
                <a href="#" wire:click="add({{ $part->id }},{{ $device->id }})">Add More</a>
                @else
                <a href="#" wire:click="add({{ $part->id }},{{ $device->id }})">Add</a>
                @endif
            </span>
        </h5>
        @if ($part->devices->count() > 0)
        <img src="/assets/img/icon20.svg" alt="icon" />
        @endif
    </div>
</div>