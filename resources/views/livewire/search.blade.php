<li>
    <form wire:submit.prevent="search">
        <input wire:model="keywords" wire:keydown.enter="search" type="text" name="Search" placeholder="Search" autofocus />
        <button>
            <img wire:click="search" src="/assets/img/search-icon.svg" alt="icon" />
        </button>
    </form>
    @if ($result != "")
    <div class="search-feed">
        <ul class="search-result d-flex flex-column justify-content-center w-100 border mt-2">
            <li class="ms-0" data-bs-toggle="modal" data-bs-target="#device{{ $result->id }}">{{ $result->title }}</li>
        </ul>
    </div>
    @endif
    @if($noResult)
    <div class="search-feed">
        <ul class="search-result d-flex flex-column justify-content-center w-100 border mt-2">
            <li class="ms-0">No Device Found...</li>
        </ul>
    </div>
    @endif
</li>