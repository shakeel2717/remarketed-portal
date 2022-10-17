<?php

namespace App\Http\Livewire;

use App\Models\Device;
use Livewire\Component;

class TransferDevice extends Component
{
    public function mount($device)
    {
        $this->device = $device;
    }

    public function repair(Device $device)
    {
        $device->status = "repair";
        $device->save();

        $this->dispatchBrowserEvent('refresh-page');
    }


    public function todo(Device $device)
    {
        $device->status = "todo";
        $device->save();

        $this->dispatchBrowserEvent('refresh-page');
    }


    public function testing(Device $device)
    {
        $device->status = "testing";
        $device->save();

        $this->dispatchBrowserEvent('refresh-page');
    }


    public function complete(Device $device)
    {
        $device->status = "complete";
        $device->save();

        $this->dispatchBrowserEvent('refresh-page');
    }

    public function render()
    {
        return view('livewire.transfer-device');
    }
}
