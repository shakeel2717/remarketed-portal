<?php

use App\Models\Activity;
use App\Models\User;

function employees()
{
    $employees = User::where('role', 'employee')->get();
    return $employees;
}


function activity($title, $description,$device)
{
    $task = new Activity();
    $task->device_id  = $device;
    $task->title  = $title;
    $task->description = $description;
    $task->save();

    return true;
}
