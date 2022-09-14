<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TransferDevice extends Component
{
    public function mount($device)
    {
        $this->device = $device;
    }

    public function render()
    {
        return view('livewire.transfer-device');
    }
}
