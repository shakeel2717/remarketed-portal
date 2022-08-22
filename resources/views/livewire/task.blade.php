<div>
    <div class="left5-tasklist">
        <h3><img src="/assets/img/done2.svg" alt="icon" class="img_a1" /> Task
            List <span><img src="/assets/img/icon17.svg" alt="icon" class="img_a2" />2/3 completed</span> </h3>
        <ul>
            @foreach ($tasks as $task)
            <li>
                <label class="customcheckbox">
                    {!! $task->status ? "<del>" : "" !!}
                        {{ $task->value }}
                        {!! $task->status ? "</del>" : "" !!}
                    <input wire:click="check({{ $task->id }})" type="checkbox" {!! $task->status ? "checked" : "" !!}>
                    <span class="checkmark"></span>
                </label>
            </li>
            @endforeach
            <li>
                <div class="row">
                    <div class="col-md-6">
                        <form wire:submit.prevent="save">
                            @csrf
                            <div class="form-group">
                                <label for="task">New Task</label>
                                <input wire:model="device_id" type="hidden" name="device_id" value="{{ $device->id }}">
                                <input wire:model="task" class="form-control" type="text" name="task" id="task" placeholder="Task Name" required>
                            </div>
                            <input type="submit" class="btn-theme mt-2" value="+Add new Subtask">
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>