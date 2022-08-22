<?php

use App\Models\User;

function employees(){
    $employees = User::where('role', 'employee')->get();
    return $employees;
}