<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;


    protected $fillable = [
        'device_id',
        'title',
        'description',
    ];


    function device(){
        return $this->belongsTo(Device::class);
    }
}
