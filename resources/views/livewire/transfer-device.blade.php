<div class="dropdown">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        Send Item to
    </a>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li wire:click="todo({{ $device->id }})"><a class="dropdown-item" href="#">Todo Department </a></li>
        <li wire:click="repair({{ $device->id }})"><a class="dropdown-item" href="#">On Going Repair </a></li>
        <li wire:click="testing({{ $device->id }})"><a class="dropdown-item" href="#">Testing Department </a></li>
        <li wire:click="complete({{ $device->id }})"><a class="dropdown-item" href="#">Completed </a></li>
    </ul>
</div>