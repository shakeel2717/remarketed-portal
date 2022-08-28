<?php

namespace App\Http\Livewire;

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

    public function render()
    {
        return view('livewire.parts');
    }
}
