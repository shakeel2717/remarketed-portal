<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_id',
        'status',
        'value',
    ];


    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
