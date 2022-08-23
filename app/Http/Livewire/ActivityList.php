<?php

namespace App\Http\Livewire;

use App\Models\Device;
use Livewire\Component;

class ActivityList extends Component
{

    public $device;
    public $task;

    public function mount($device)
    {
        $this->device = $device;
    }

    protected $rules = [
        'task' => 'required|string',
    ];


    function save()
    {
        $this->validate();
        
        activity("New Activity Added",  $this->task , $this->device->id);

        $this->device = Device::find($this->device->id);
        $this->task = "";
    }

    public function render()
    {
        return view('livewire.activity-list');
    }
}
