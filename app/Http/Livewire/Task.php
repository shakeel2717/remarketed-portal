<?php

namespace App\Http\Livewire;

use App\Models\Device;
use App\Models\Task as ModelsTask;
use Illuminate\Http\Request;
use Livewire\Component;

class Task extends Component
{
    public $device;
    public $task;
    public $tasks;
    public $device_id;


    public function mount($device)
    {
        // loading all tasks
        $this->tasks = $device->tasks;
        $this->device = $device;
        $this->device_id = $device->id;
    }


    protected $rules = [
        'device_id' => 'required|integer',
        'task' => 'required|string',
    ];


    public function save()
    {
        $this->validate();

        // adding this task with this Device Id.
        $newTask = new ModelsTask();
        $newTask->device_id = $this->device_id;
        $newTask->value = $this->task;
        $newTask->save();
        $device = Device::find($this->device_id);
        $this->tasks = $device->tasks;
        $this->task = "";
    }


    public function check($task)
    {
        $task = ModelsTask::find($task);
        $task->status = true;
        $task->save();
        $device = Device::find($task->device->id);
        $this->tasks = $device->tasks;
        dd("Success");
    }



    public function render()
    {
        return view('livewire.task');
    }
}
