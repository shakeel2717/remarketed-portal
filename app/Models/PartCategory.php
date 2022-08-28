<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'status',
    ];


    public function parts()
    {
        return $this->hasMany(Parts::class,'part_categories_id');
    }
}
