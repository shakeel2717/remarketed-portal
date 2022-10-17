<?php

namespace App\Http\Livewire;

use App\Models\Device;
use App\Models\PartCategory;
use App\Models\Parts as ModelsParts;
use Livewire\Component;

class Parts extends Component
{
    public $device;
    public $categories;
    public $parts;

    public function mount($device)
    {
        $this->device = $device;
        $this->categories = PartCategory::where('status', true)->get();
        $this->parts = ModelsParts::where('status', true)->get();
    }

    public function add($part, $device)
    {
        $device = Device::find($device);
        $part = ModelsParts::find($part);
        $device->parts()->attach($part->id);

        // adding new activity
        activity("New Part Ordered", "requested for a missing part.", $device->id);

        $this->dispatchBrowserEvent('refresh-page');
    }

    public function render()
    {
        return view('livewire.parts', [
            'categories' => PartCategory::where('status', true)->get(),
            'parts' => ModelsParts::where('status', true)->get(),
        ]);
    }
}
